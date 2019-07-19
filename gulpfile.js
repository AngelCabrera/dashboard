const gulp = require('gulp');
const connect = require('gulp-connect-php');
const browsersync = require('browser-sync');


gulp.task('connect-sync', function () {
    connect.server({}, () => {
        browsersync({
            proxy: '127.0.0.1/thefutures/dashboard/'
        });
    });
    gulp.watch('public/styles/*.css').on('change', function () {
        browsersync.reload();
    });
    gulp.watch('resources/views/*.twig').on('change', function () {
        browsersync.reload();
    });
});