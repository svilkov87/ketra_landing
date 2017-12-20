'use strict';

var gulp = require('gulp'),
	sass = require('gulp-sass'),

	//concatCss = require('gulp-concat-css'),//присоединяем все файлы css в один
	rename = require('gulp-rename'),
	cleanCSS = require('gulp-clean-css'),
	autoprefixer = require('gulp-autoprefixer'),
	livereload = require('gulp-livereload'),
	connect = require('gulp-connect'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	imagemin = require('gulp-imagemin'),
	imageminJpegtran = require('imagemin-jpegtran'),
	imageminOptipng = require('imagemin-optipng'),
	imageminSvgo = require('imagemin-svgo'),
	pngquant = require('imagemin-pngquant'),
	cache = require('gulp-cache'),
	notify = require("gulp-notify");

//livereload
	gulp.task('connect', function() {
	  connect.server({
	    root: 'app',
	    livereload: true
	  });
	});

//sass и css
gulp.task('sass', function () {
  return gulp.src(['app/sass/**/*.sass', 'app/sass/**/*.scss'])
    .pipe(autoprefixer({
        browsers: ['last 15 versions']
    }))
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(rename('libs.min.css'))
    .pipe(gulp.dest('app/css'))
    .pipe(connect.reload());
});

//js
gulp.task('scripts', function() {
  return gulp.src('app/libs/main-min.js')
    .pipe(connect.reload());
});

//html
gulp.task('html', function () {
	gulp.src('app/*.html')
	.pipe(connect.reload());
});


//автом вызов галп при любом изменении css-файлов
gulp.task('watch', function () {
	gulp.watch(['app/sass/**/*.sass', 'app/sass/**/*.scss'], ['sass'])
	gulp.watch('app/libs/*.js', ['scripts'])
	gulp.watch('app/*.html', ['html']);
});

//удаление папки dist перед сборкой
gulp.task('clean', function() {
	return del.sync('dist');
});

//чистим кэш
gulp.task('clear', function (callback) {
	return cache.clearAll();
})

//оптимизация изображений
gulp.task('img', function() {
	return gulp.src('app/img/**/*')
		.pipe(cache(imagemin({
			interlaced: true,
			progressive: true,
			svgoPlugins: [{removeViewBox: false}],
			use: [pngquant()]
		})))
		.pipe(gulp.dest('dist/img'));
});

//в продакшн
gulp.task('build', ['clean', 'img', 'sass', 'scripts'], function() {

	var buildCss = gulp.src(['app/css/libs.min.css'])
	.pipe(gulp.dest('dist/css'));

	var buildJs = gulp.src('app/js/**/*') // Переносим скрипты в продакшен
	.pipe(gulp.dest('dist/js'));

	var buildHtml = gulp.src('app/*.html') // Переносим HTML в продакшен
	.pipe(gulp.dest('dist'));

});

//задачи по-умолчанию
gulp.task('default', ['connect', 'watch','sass', 'html','scripts']);








