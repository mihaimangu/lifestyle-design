var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass-default', function () {
  return gulp.src('./sass/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('.'));
});

gulp.task('sass-bootstrap', function () {
  return gulp.src('./sass/bootstrap.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});

gulp.task('sass-custom', function () {
  return gulp.src('./sass/custom.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});

gulp.task('default', function () {
  gulp.watch('./sass/style.scss', ['sass-default']);
    gulp.watch('./sass/bootstrap.scss', ['sass-bootstrap']);
    gulp.watch('./sass/custom.scss', ['sass-custom']);
});


