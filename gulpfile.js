const gulp = require('gulp');

gulp.task('css', function () {
    return gulp.src('public/styles/main.css')
        .pipe(gulp.dest('public/dist/styles'));
});
gulp.task('watch', function () {
    gulp.watch('public/styles/*.css', gulp.series('css'));
});