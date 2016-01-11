(function () {

    'use strict';

    /**
     * Dependencies
     */
    var paths = require('./gulp.config.json');
    var gulp = require('gulp');
    var concat = require('gulp-concat');
    var gutil = require('gulp-util');
    var notify = require('gulp-notify');
    var sass = require('gulp-sass');
    var phpunit = require('gulp-phpunit');//notify requires >= v 0.0.3
    var bytediff = require('gulp-bytediff');
    var gulpif = require('gulp-if');
    var argv = require('yargs').argv;
    var uglify = require('gulp-uglify');
    var sourcemaps = require('gulp-sourcemaps');
    var ngAnnotate = require('gulp-ng-annotate');
    var connect = require('gulp-connect');

    /**
     * Command line arguments
     */
    var taskConstants = {
        "prod": argv.prod,
        "dev": argv.dev
    };

    /**
     * Building js, less, vendorjs etc...
     */
    gulp.task('build', [
        'vendorjs', // vendor.js
        'vendorcss', // vendor.css
        'js', // app.js
        'sass' // main.css
    ]);

    /**
     * TASK: JS
     */
    gulp.task('js', function () {
        gulp.src(paths.js)
            .pipe(gulpif(taskConstants.dev, sourcemaps.init()))
            .pipe(concat('app.js'))
            .pipe(bytediff.start())
            .pipe(ngAnnotate())
            .pipe(gulpif(taskConstants.prod, uglify()))//.on('error', swallowError)
            .pipe(bytediff.stop())
            .pipe(gulpif(taskConstants.dev, sourcemaps.write()))
            .pipe(gulp.dest(paths.build.folder))
            .pipe(connect.reload());
    });

    /**
     * Task: vendorjs
     */
    gulp.task('vendorjs', function() {
        gulp.src(paths.vendorjs)
            .pipe(gulpif(taskConstants.dev, sourcemaps.init()))
            .pipe(concat(paths.build.files.vendorjs))
            .pipe(bytediff.start())
            .pipe(gulpif(taskConstants.prod, uglify()))//.on('error', swallowError)
            .pipe(bytediff.stop())
            .pipe(gulpif(taskConstants.dev, sourcemaps.write()))
            .pipe(gulp.dest(paths.build.folder));
    });

    /**
     * Task: vendorcss
     */
    gulp.task('vendorcss', function() {
        gulp.src(paths.vendorcss)
            .pipe(gulpif(taskConstants.dev, sourcemaps.init()))
            .pipe(concat(paths.build.files.vendorcss))
            .pipe(bytediff.start())
            //.pipe(gulpif(taskConstants.prod, uglify())).on('error', swallowError)
            .pipe(bytediff.stop())
            .pipe(gulpif(taskConstants.dev, sourcemaps.write()))
            .pipe(gulp.dest(paths.build.folder));
    });

    /**
     * Task: SASS
     */
    gulp.task('sass', function()
    {
        gulp.src('public/styles/**/*.scss')
            .pipe(sourcemaps.init())
            .pipe(sass()).on('error', gutil.log)
            .pipe(concat('main.css'))
            .pipe(sourcemaps.write())
            .pipe(gulp.dest('public/styles'))
            .pipe(connect.reload())
            .pipe(notify('CSS compiled!'));
    });

    /**
     * Task: PHPUNIT
     */
    gulp.task('phpunit', function()
    {
        var options = {
            debug: true,
            notify: true
        };

        gulp.src('app/tests/*.php')
            .pipe(phpunit('', options))
            .on('error', notify.onError({
                title: 'PHPUnit Failed',
                message: 'One or more tests failed, see the cli for details.'
            }))
            .pipe(notify({
                title: 'PHPUnit Passed',
                message: 'All tests passed!'
            }));

    });

    /**
     *  Watch for changes in app, less, vendor dependencies & compile new dependency as necessary.
     */
    gulp.task('watch', function() {
        gulp.watch('public/scripts/**/*.js', ['js']);
        gulp.watch('gulp.config.json', ['vendorjs', 'vendorcss']);
        gulp.watch('public/styles/**/*.scss', ['sass']);
        gulp.watch('app/**/*.php', ['phpunit']);
    });

    /**
     * TASK: default
     */
    gulp.task('default', ['watch'/*, 'connect'*/]);
	
	function swallowError (error) {

    //If you want details of the error in the console
    console.log(error.toString());

    this.emit('end');
}

})();