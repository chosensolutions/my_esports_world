(function () {

    'use strict';

    /**
     * Dependencies
     */
    var paths = require('./gulp.config.json');
    var gulp = require('gulp');
    var concat = require('gulp-concat');
    var bytediff = require('gulp-bytediff');
    var gulpif = require('gulp-if');
    var argv = require('yargs').argv;
    var uglify = require('gulp-uglify');
    var sourcemaps = require('gulp-sourcemaps');
    var sass = require('gulp-sass');
    var minifyCss = require('gulp-minify-css');

    /**
     * Command line arguments
     */
    var taskConstants = {
        "prod": argv.prod,
        "dev": argv.dev
    };

    /**
     * Building vendorjs, js, vendorcss, css, etc...
     */
    gulp.task('build', [
        'vendorjs',
        'js',
        'vendorcss',
        'css'
    ]);

    /**
     * Task: vendorjs
     */
    gulp.task('vendorjs', function() {
        gulp.src(paths.vendorjs)
            .pipe(bytediff.start())
            .pipe(gulpif(taskConstants.dev, sourcemaps.init()))
            .pipe(concat(paths.build.files.vendorjs))
            .pipe(gulpif(taskConstants.prod, uglify()))
            .pipe(gulpif(taskConstants.dev, sourcemaps.write()))
            .pipe(gulp.dest(paths.build.folder))
            .pipe(bytediff.stop());
    });

    /**
     * TASK: JS
     */
    gulp.task('js', function () {
        gulp.src(paths.js)
            .pipe(bytediff.start())
            .pipe(gulpif(taskConstants.dev, sourcemaps.init()))
            .pipe(concat(paths.build.files.js))
            .pipe(gulpif(taskConstants.prod, uglify()))
            .pipe(gulpif(taskConstants.dev, sourcemaps.write()))
            .pipe(gulp.dest(paths.build.folder))
            .pipe(bytediff.stop());
    });

    /**
     * Task: vendorcss
     */
    gulp.task('vendorcss', function() {
        gulp.src(paths.vendorcss)
            .pipe(bytediff.start())
            .pipe(gulpif(taskConstants.dev, sourcemaps.init()))
            .pipe(concat(paths.build.files.vendorcss))
            .pipe(gulpif(taskConstants.prod, minifyCss()))
            .pipe(gulpif(taskConstants.dev, sourcemaps.write()))
            .pipe(gulp.dest(paths.build.folder))
            .pipe(bytediff.stop());
    });

    /**
     * Task: Build SASS to CSS
     */
    gulp.task('css', function() {
        gulp.src(paths.css)
            .pipe(bytediff.start())
            .pipe(gulpif(taskConstants.dev, sourcemaps.init()))
            .pipe(sass().on('error', sass.logError))
            .pipe(concat(paths.build.files.css))
            .pipe(gulpif(taskConstants.prod, minifyCss()))
            .pipe(gulpif(taskConstants.dev, sourcemaps.write()))
            .pipe(gulp.dest(paths.build.folder))
            .pipe(bytediff.stop());
    });

    /**
     *  Watch for changes in app, sass, vendor dependencies & compile new dependency as necessary.
     */
    gulp.task('watch', function() {
        gulp.watch('app/js/**/*.js', ['js']);
        gulp.watch('app/css/**/*.scss', ['css']);
    });

    /**
     * TASK: default
     */
    gulp.task('default', [
        'watch'
    ]);

})();