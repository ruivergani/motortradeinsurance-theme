const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('autoprefixer');
const browserSync = require('browser-sync').create();
const tailwindcss = require('tailwindcss');
const cssnano = require('cssnano');
const postcss = require('gulp-postcss');
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');

const PROJECT_DIR = __dirname;

// Task to compile SCSS and apply Tailwind CSS, Autoprefixer, and minify the CSS
gulp.task('sass', function () {
  return gulp.src('src/scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([
      tailwindcss({
        config: `${PROJECT_DIR}/tailwind.config.js`
      }),
      autoprefixer(),
      cssnano()
    ]))
    .pipe(gulp.dest('src/css'))
    .pipe(browserSync.stream());
});

// Task to concatenate and create a single 'plugins.css' file from multiple CSS files
function pluginsCSS() {
  return gulp.src('./src/css/libs/*.css')
    .pipe(concat('plugins.css'))
    .pipe(gulp.dest('./src/css/'))
    .pipe(browserSync.stream());
}
gulp.task('plugincss', pluginsCSS);

// Task to concatenate and create a single 'all.js' file from multiple JS files, then transpile and minify the JS
function gulpJs() {
  return gulp.src('./src/js/scripts/*.js')
    .pipe(concat('all.js'))
    .pipe(babel({
      presets: ['@babel/env']
    }))
    .pipe(uglify())
    .pipe(gulp.dest('./src/js/'))
    .pipe(browserSync.stream());
}
gulp.task('alljs', gulpJs);

// Task to concatenate and create a single 'plugins.js' file from multiple JS files
function pluginsJs() {
  return gulp.src(['./src/js/libs/*'])
    .pipe(concat('plugins.js'))
    .pipe(gulp.dest('./src/js/'))
    .pipe(browserSync.stream());
}
gulp.task('pluginjs', pluginsJs);

// Task to start a local server using BrowserSync and watch for changes in SCSS, CSS, HTML, and JS files
gulp.task('serve', function () {
  browserSync.init({
    proxy: "localhost:10029/",
    browser: "/Applications/Google Chrome.app/" // default Chrome
  });

  gulp.watch('./src/scss/*.scss', gulp.series('sass'));
  gulp.watch('./src/css/libs/*.css', pluginsCSS);
  gulp.watch('**/*.php').on('change', gulp.series('sass', browserSync.reload));
  gulp.watch('./src/js/scripts/*js', gulpJs);
  gulp.watch('./src/js/libs/*.js', pluginsJs);
});

// Default task to run all the defined tasks in sequence
gulp.task('default', gulp.series('sass', 'plugincss', 'serve', 'alljs', 'pluginjs'));
