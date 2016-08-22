'use strict';
var gulp       = require('gulp');
var browserify = require('browserify');
var source     = require('vinyl-source-stream');
var maps       = require('gulp-sourcemaps');

var packageJson = require('./package.json');
var dependencies = Object.keys(packageJson && packageJson.dependencies || {});

gulp.task('vendors', function() {
  return browserify()
    .require(dependencies)
    .bundle()
    .pipe(source('vendor.bundle.js'))
    .pipe(gulp.dest(__dirname + '/public/scripts'));
});

gulp.task('todo', function() {
  return browserify('app/app.js')
    .external(dependencies)
    .bundle()
    .pipe(source('todo.bundle.js'))
    .pipe(maps.write('./'))
    .pipe(gulp.dest(__dirname + '/public/scripts'))
});

gulp.task('watch', function() {
  gulp.watch('package.json', ['vendors']);
  gulp.watch('app/scripts/**', ['todo']);
});

gulp.task('default', ['vendors', 'todo', 'watch']);
