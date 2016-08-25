var gulp = require('gulp'),
 sass = require('gulp-sass'),
 watch = require('gulp-watch'),
 jshint= require('jshint-stylish'),
browserSync = require('browser-sync').create(),
 htmlbeautify = require('gulp-html-beautify');

// create a default task and just log a message
gulp.task('default', ['watch']);

// configure the jshint task




gulp.task('build-css', function() {
  return gulp.src('wp-content/themes/accesspress-child/scss/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('wp-content/themes/accesspress-child/'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('browserSync', function() {
  browserSync.init({
    server: {
      baseDir: 'app'
    },
  })
})


gulp.task('watch', function() {
  
  gulp.watch('wp-content/themes/accesspress-child/scss/**/*.scss', ['build-css']);
});

gulp.task('htmlbeautify', function() {
  var options = {
    indentSize: 2
  };
  gulp.src('*.html')
    .pipe(htmlbeautify(options))
    .pipe(gulp.dest('./public/'))
});