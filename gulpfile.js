var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    minifyCSS = require('gulp-minify-css'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass');

gulp.task('styles', function() {
    gulp.src('includes/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./includes/css/'))
});

gulp.task('css', function() {
    gulp.src('includes/css/**/*.css')
        .pipe(minifyCSS())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(concat('app.css'))
        .pipe(gulp.dest('includes/'));
});

gulp.task('default',function() {
    gulp.watch('includes/sass/**/*.scss',['styles', 'css']);
});
