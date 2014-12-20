/*
    See dev dependencies https://gist.github.com/isimmons/8927890
    Compiles sass to compressed css with autoprefixing
    Compiles coffee to javascript
    Livereloads on changes to coffee, sass, and blade templates
    Runs PHPUnit tests
    Watches sass, coffee, blade, and phpunit
    Default tasks sass, coffee, phpunit, watch
*/
 
var gulp = require('gulp');
var gutil = require('gulp-util');
var notify = require('gulp-notify');
var sass = require('gulp-ruby-sass');
var autoprefix = require('gulp-autoprefixer');
var coffee = require('gulp-coffee');
var phpunit = require('gulp-phpunit');//notify requires >= v 0.0.3
var fs = require('fs'); //only used for icon file with growlNotifier
 
 
// livereload
var livereload = require('gulp-livereload');
var lr = require('tiny-lr');
var server = lr();
 
//uncomment for growl notify for windows users
//Specify custom icon by passing object to growl() { icon: fs.readFileSync('path_to_icon_file') } 
//var growl = ('gulp-notify-growl');
//var growlNotifier = growl();
 
//CSS directories
var sassDir = 'app/assets/sass';
var targetCSSDir = 'public/css';
 
//javascript directories
var coffeeDir = 'app/assets/coffee';
var targetJSDir = 'public/js';
 
// blade directory
var bladeDir = 'app/views';
 
// Tasks
/* sass compile */
gulp.task('sass', function() {
    return gulp.src(sassDir + '/main.sass')
        .pipe(sass({ style: 'compressed'}).on('error', gutil.log))
        .pipe(autoprefix('last 10 versions'))
        .pipe(gulp.dest(targetCSSDir))
        .pipe(livereload(server))
        .pipe(notify('CSS compiled, prefixed, and minified.'));
        
        //growlNotifier for windows
        //.pipe(notify({title: 'CSS Compiled', message: 'compiled, prefixed, and minified.', notifier: growlNotifier}));
});
 
/* coffee compile */
gulp.task('coffee', function() {
    return gulp.src(coffeeDir + '/**/*.coffee')
        .pipe(coffee().on('error', gutil.log))
        .pipe(gulp.dest(targetJSDir))
        .pipe(livereload(server));
});
 
/* Blade Templates */
gulp.task('blade', function() {
    return gulp.src(bladeDir + '/**/*.blade.php')
        .pipe(livereload(server));
});
 
/* PHPUnit */
gulp.task('phpunit', function() {
    //notify defaults to false. If you don't want to use a notifier or worry with errors in this task leave it off
    var options = {debug: true, notify: true} 
    gulp.src('app/tests/*.php')
        .pipe(phpunit('', options)) //empty phpunit path defaults ./vendor/bin/phpunit for windows specify with double back slashes
        
        //both notify and notify.onError will take optional notifier: growlNotifier for windows notifications
        //if options.notify is true be sure to handle the error here or suffer the consequenses!
        .on('error', notify.onError({
            title: 'PHPUnit Failed',
            message: 'One or more tests failed, see the cli for details.'
        }))
        
        //will fire only if no error is caught
        .pipe(notify({
            title: 'PHPUnit Passed',
            message: 'All tests passed!'
        }));
});
 
/* Watcher */
gulp.task('watch', function() {
    
    //server.listen(35729, function(err) {
    //    if(err) {console.log(err);}
    // 
    //    gulp.watch(bladeDir + '/**/*.blade.php', ['blade']);
    //   gulp.watch(sassDir + '/**/*.sass', ['sass']);
    //    gulp.watch(coffeeDir + '/**/*.coffee', ['coffee']);
    //});

    gulp.watch('app/**/*.php', ['phpunit']); 
});
 
/* Default Task */
gulp.task('default', [/*'phpunit', 'coffee', ''sass', */'watch']);