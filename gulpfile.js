var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');
var uglify      = require('gulp-uglify');
var concat      = require('gulp-concat');
var spritesmith = require('gulp.spritesmith');
var gutil       = require('gulp-util');

/*

  ## gulp serve

  1. Run the BrowserSync server at http://localhost:9999
  2. Compile .scss and inject into browser
  3. Live-reload .html

*/

gulp.task('serve', ['styles', 'scripts'], function() {

    browserSync.init({
        server: "./",
        port: 9999,
        open: false
    });

    gulp.watch("./js/**/*.*", ['scripts']);
    gulp.watch("./scss/**/*.*", ['styles']);
    gulp.watch("./**/*.html").on('change', browserSync.reload);
    gulp.watch('./img/sprites/*.jpg', ['sprites']);
});

/*

  ## gulp styles

  1. Compile sass
  2. Inject into browser with BrowserSync

*/

gulp.task('styles', function () {
  return gulp.src('./scss/*.*')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());
});

/*

  ## gulp scripts

  1. Concatinate all js files
  2. Minify
  3. Reload browser

*/

gulp.task('scripts', function(){
  return gulp.src(['./js/vendor/slick/slick.js', './js/scripts.js'])
    .pipe(concat('mortified.min.js'))
    .pipe(uglify()).on('error', gutil.log)
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());
})

/*

  ## gulp sprites

*/

gulp.task('sprites', function () {
  var spritesPath = './img/sprites/';
  var spriteData = gulp.src(spritesPath + '*.jpg').pipe(spritesmith({
    imgName: './img/sprite.jpg',
    cssName: 'sprite.css'
  }));
  return spriteData.pipe(gulp.dest('./'));
});

/*

  ## gulp

  The default gulp task will run the server which watches,
  compiles and updates HTML and SCSS.

*/

gulp.task('default', ['serve']);
