'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var phpunit = require('gulp-phpunit');
var exec = require('child_process').exec;

gulp.task('sass', function () {
  return gulp.src('app/Resources/assets/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('web/frontend/css'));
});
 
gulp.task('sass:watch', function () {

	var onChange = function (event) {
        console.log('File '+event.path+' has been '+event.type);
        // Tell LiveReload to reload the window

    };
  	gulp.watch('app/Resources/assets/sass/**/*.scss', ['sass']).on('change', onChange);;
});

gulp.task('test', function () {
    return gulp.src('src/AppBundle/*/Tests/**/*.php')
        .pipe(phpunit('./bin/phpunit', {debug: false, configurationFile: 'app/phpunit.xml'}));
});

// gulp.task('installAssets', function () {
//     exec('php app/console assets:install --symlink', logStdOutAndErr);
// });

gulp.task('runServer', function () {
    exec('php app/console server:run 0.0.0.0:4500', logStdOutAndErr);
});

// Without this function exec() will not show any output
var logStdOutAndErr = function (err, stdout, stderr) {
    console.log(stdout + stderr);
};


gulp.task('default', ['sass', 'sass:watch', 'test', 'runServer']);
