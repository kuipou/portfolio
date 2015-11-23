var gulp   = require('gulp');
var uglify = require ('gulp-uglify');
var compass = require('gulp-compass');
var plumber = require('gulp-plumber');
var prefix = require('gulp-autoprefixer');
 
gulp.task('sass', function() {
  gulp.src('sass/**/*.scss')
  .pipe(plumber({
      errorHandler: function (error) {
        console.log(error.message);
        this.emit('end');
    }}))
  .pipe(compass({
      config_file: './config.rb',
      css: 'css',
      sass: 'sass'
    }))
    .pipe(prefix('last 2 version'))
    .pipe(gulp.dest('css/'));
    
});
gulp.task('js', function(){
 gulp.src('js/*.js')
 .pipe(plumber())
 .pipe(uglify())
 .pipe(gulp.dest('js/test'));
});


// watch

gulp.task('watch', function() {
	
	gulp.watch('js/*.js', ['js']);
	gulp.watch('sass/**/*.scss', ['sass']);
});