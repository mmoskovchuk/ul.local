var domain = 'http://yuriylutsenko.info.local/'; //local url
var path_to_theme = '/wp-content/themes/ul-ux/'; //url with trailing slash

//NPM-MODULES
//--------------------------------------------------
var gulp = require('gulp');
var plumber = require('gulp-plumber');
var rename = require("gulp-rename");

var imagemin = require('gulp-imagemin');
var less = require('gulp-less');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

var critical = require('critical');

//TASK: gulp
//--------------------------------------------------
gulp.task('default', ['less', 'js'], function () {
	gulp.start('watch');
});

//TASK: gulp watch
//--------------------------------------------------
gulp.task('watch', function() {
	gulp.watch(['./less/**/*.less'], ['less']);
	gulp.watch(['./js/**/*.js', '!./js/scripts.min.js'], ['js']);
});

//TASK: gulp img
//--------------------------------------------------
gulp.task('img', function() {
	gulp.src(['./{img,css}/**/*.{png,jpg,jpeg,gif}', './screenshot.png'])
	.pipe(plumber())
	.pipe(imagemin({progressive: true}))
	.pipe(gulp.dest("./"));
});

//TASK: gulp less
//--------------------------------------------------
gulp.task('less', function () {
	gulp.src(['./less/style.less'])
	.pipe(plumber())
	.pipe(less())
	.pipe(cleanCSS())
	.pipe(rename({extname: ".min.css"}))
	.pipe(autoprefixer({browsers: ['last 50 versions']}))
	.pipe(cleanCSS({compatibility: 'ie8', keepSpecialComments: 1}))

	.pipe(gulp.dest('./css'))
});


//TASK: gulp js
//--------------------------------------------------
gulp.task('js', function() {
	return gulp.src(['./js/custom.js'])
	.pipe(plumber())
	.pipe(concat('./scripts.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest("./js"));
});

//TASK: gulp critical-css
//before run this task you need comment next code in functions.php:
//add_action( 'wp_enqueue_scripts', 'ox_adding_critical_css' );
//--------------------------------------------------
gulp.task('critical', function() {
    critical.generate({
        src: domain,
        dest: 'css/critical.css.php',
        minify: true,
        pathPrefix: path_to_theme + this.base
    });
});