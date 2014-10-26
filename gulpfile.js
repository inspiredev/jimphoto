var gulp = require('gulp'),
    sass = require('gulp-sass'),
    prefix = require('gulp-autoprefixer'),
    csso = require('gulp-csso');

var path = {
    scss: {
        src: './scss/',
        dest: './css'
    }
};

gulp.task('scss', function () {
    return gulp.src(path.scss.src + '**/*.scss')
        .pipe(sass())
        .pipe(prefix())
        .pipe(csso())
        .pipe(gulp.dest(path.scss.dest));
});

gulp.task('watch', function () {
    gulp.watch(path.scss.src + '**/*.scss', ['scss']);
});