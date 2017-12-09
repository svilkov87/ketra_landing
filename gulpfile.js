'use strict';

var gulp = require('gulp'),// подключение галп
	sass = require('gulp-sass'),

	//concatCss = require('gulp-concat-css'),//присоединяем все файлы css в один
	rename = require('gulp-rename'),//переименовываем конкат и миниф файл
	cleanCSS = require('gulp-clean-css'),//минифицируем
	autoprefixer = require('gulp-autoprefixer'),//автопрефикер
	livereload = require('gulp-livereload'),//
	connect = require('gulp-connect'),//соед с уд сервером
	concat = require('gulp-concat'),//конкатенация
	uglify = require('gulp-uglify'),
	imagemin = require('gulp-imagemin'), // Подключаем библиотеку для работы с изображениями
	imageminJpegtran = require('imagemin-jpegtran'),//Compress JPEG images
	imageminOptipng = require('imagemin-optipng'), //Compress PNG images
	imageminSvgo = require('imagemin-svgo'),//Compress SVG images
	pngquant = require('imagemin-pngquant'), // Подключаем библиотеку для работы с png
	cache = require('gulp-cache'),//когда картинко много кэш
	notify = require("gulp-notify");//уведомление о действии

//livereload
	gulp.task('connect', function() {
	  connect.server({
	    root: 'app',
	    livereload: true
	  });
	});

//hash
// gulp.task('rev_append', function() {
//     gulp.src('app/*.html')
//         .pipe(rev_append())
//         .pipe(gulp.dest('app/'));
// });

// gulp.task('rev', function () {
//     return gulp.src('app/sass/**/*.scss')
//         .pipe(sass())
//         .pipe(cleanCSS()) //минифицируем css
//         .pipe(rev())
//         // .pipe(connect.reload())
//         .pipe(gulp.dest('app/css/'))
//         .pipe(rev.manifest())
//         .pipe(gulp.dest('app/manifests/'));
// });


// gulp.task('rev_collector', ['rev'], function () {
//     return gulp.src(['app/manifests/**/*.json', 'app/*.html'])//
//         .pipe( revCollector({
//             replaceReved: true
//         }) )
//         .pipe( gulp.dest('app/') );
// });

// function cleaner() {
//     return through.obj(function(file, enc, cb){
//         rimraf( path.resolve( (file.cwd || process.cwd()), file.path), function (err) {
//             if (err) {
//                 this.emit('error', new gutil.PluginError('Cleanup old files', err));
//             }
//             this.push(file);
//             cb();
//         }.bind(this));
//     });
// }

// gulp.task('cleanHash', ['rev_collector'], function() {
//     gulp.src( ['app/**/*.*'], {read: false})
//         .pipe( revOutdated(1) ) // leave 1 latest asset file for every file name prefix.
//         .pipe( cleaner() );

//     return;
// });

// gulp.task('rev_all', ['rev_collector', 'rev', 'cleanHash']);

//sass и css
gulp.task('sass', function () {
  return gulp.src(['app/sass/**/*.sass', 'app/sass/**/*.scss'])//путь к папке с файлами, м которыми будем работать
    .pipe(autoprefixer({
        browsers: ['last 15 versions']
    }))
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(cleanCSS()) //минифицируем css
    .pipe(rename('libs.min.css'))//как назовем скомпилированный min- файл
    .pipe(gulp.dest('app/css'))//куда выкладываем итоговый файл
    .pipe(connect.reload());
});

//сжимаем библиотеки css

//js
gulp.task('scripts', function() {
  return gulp.src('app/libs/main-min.js')
    // .pipe(concat('all.min.js'))
    // .pipe(uglify())
    // .pipe(gulp.dest('app/js'))
    .pipe(connect.reload());
});

//html
gulp.task('html', function () {
	gulp.src('app/*.html')
	.pipe(connect.reload());
});


//автом вызов галп при любом изменении css-файлов
gulp.task('watch', function () {
    // gulp.watch('app/css/*css', ['css']) //следим за изменениями всех css, и при их изменении запускаем таск css
	gulp.watch(['app/sass/**/*.sass', 'app/sass/**/*.scss'], ['sass']) //следим за изменениями всех css, и при их изменении запускаем таск css
	// gulp.watch('app/jade/index.jade', ['jade'])
	gulp.watch('app/libs/*.js', ['scripts'])
	gulp.watch('app/*.html', ['html']);
});

//удаление папки dist перед сборкой
gulp.task('clean', function() {
	return del.sync('dist'); // Удаляем папку dist перед сборкой
});

//чистим кэш
gulp.task('clear', function (callback) {
	return cache.clearAll();
})

//оптимизация изображений
gulp.task('img', function() {
	return gulp.src('app/img/**/*') // Берем все изображения из app
		.pipe(cache(imagemin({  // Сжимаем их с наилучшими настройками с учетом кеширования
			interlaced: true,
			progressive: true,
			svgoPlugins: [{removeViewBox: false}],
			use: [pngquant()]
		})))
		.pipe(gulp.dest('dist/img')); // Выгружаем на продакшен
});

// gulp.task('img', function() {
//     return gulp.src('app/img/**/*')
//         .pipe(imagemin({
//         	use: [imageminJpegtran()],
//         	use: [imageminOptipng()]
//         }))
//         .pipe(gulp.dest('dist/images'));
// 	});

//в продакшн
gulp.task('build', ['clean', 'img', 'sass', 'scripts'], function() {

	var buildCss = gulp.src(['app/css/libs.min.css'])
	.pipe(gulp.dest('dist/css'));

	// var buildFonts = gulp.src('app/fonts/**/*') // Переносим шрифты в продакшен
	// .pipe(gulp.dest('dist/fonts'));

	var buildJs = gulp.src('app/js/**/*') // Переносим скрипты в продакшен
	.pipe(gulp.dest('dist/js'));

	var buildHtml = gulp.src('app/*.html') // Переносим HTML в продакшен
	.pipe(gulp.dest('dist'));

});

//задачи по-умолчанию
gulp.task('default', ['connect', 'watch','sass', 'html','scripts']);








