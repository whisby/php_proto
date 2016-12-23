
var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var stripCSSComments = require('gulp-strip-css-comments');
var cleanCSS = require("gulp-clean-css");
var rename = require('gulp-rename');
var util = require("gulp-util");

gulp.task('sass:default', function(){
gulp.src('./sass/themes/**.scss')
.pipe(sourcemaps.init())
.pipe(sass())
.pipe(rename('styles.css'))
.pipe(sourcemaps.write())
.pipe(gulp.dest('./public'));
});


gulp.task('default', ['sass:default'], function() {
    gulp.watch('./sass/**/*.scss', ['sass:default']);
});