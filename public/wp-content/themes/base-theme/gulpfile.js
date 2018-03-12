var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var bs = require('browser-sync').create();

gulp.task('browser-sync', ['sass'], function() {
    bs.init({
        proxy: {
            target: "http://192.168.33.10/"
        }
    });
});

gulp.task('sass', function() {
    gulp.src('sass/*.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('./'))
		.pipe(autoprefixer({browsers: ['last 2 versions', 'ie >= 9', "Android >= 5", "Safari >= 6"]}))
        .pipe(gulp.dest('./'))
        .pipe(bs.reload({stream: true})); 
}); 



//Watch task
gulp.task('watch', ['browser-sync'], function() {
	gulp.watch('sass/**/*.scss', ['sass']);
    gulp.watch("*.html").on('change', bs.reload);
});

gulp.task('default', ['sass', 'watch']);