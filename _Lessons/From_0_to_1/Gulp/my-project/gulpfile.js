let gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    del = require('del'),
    autoprefixer = require('gulp-autoprefixer');

// Функция компиляции .scss в .css / обновление браузера при сохранении .scss
gulp.task('scss', function () {
    return gulp.src('app/scss/**/*.scss')
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(autoprefixer({
            browsers: ['last 8 versions']
        }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('app/css'))
        .pipe(browserSync.reload({ stream: true }))
});

// обновление браузера при сохранении .html
gulp.task('html', function () {
    gulp.src('app/*.html')
        .pipe(browserSync.reload({ stream: true }))
});

// обновление браузера при сохранении .js
gulp.task('script', function () {
    gulp.src('app/js/*.js')
        .pipe(browserSync.reload({ stream: true }))
});

// объединение и сжатие .css файлов
gulp.task('css', function () {
    return gulp.src([
        'node_modules/normalize.css/normalize.css',
        'node_modules/slick-carousel/slick/slick.css'
    ])
        .pipe(concat('_libs.scss'))
        .pipe(gulp.dest('app/scss'))
        .pipe(browserSync.reload({ stream: true }))
});

// объединение и сжатие .js файлов
gulp.task('js', function () {
    return gulp.src([
        'node_modules/slick-carousel/slick/slick.js'
    ])
        .pipe(concat('libs.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('app/js'))
        .pipe(browserSync.reload({ stream: true }))

});

// Функция запуска сервера для браузера (окна)
gulp.task('browser-sync', function () {
    browserSync.init({
        server: {
            baseDir: "app/"
        }
    });
});

//  Функция сборки проекта в папку Dist
gulp.task('export', function () {
    let buildHtml = gulp.src('app/**/*.html')
        .pipe(gulp.dest('dist'));

    let buildCss = gulp.src('app/css/**/*.css')
        .pipe(gulp.dest('dist/css'));

    let buildJs = gulp.src('app/js/**/*.js')
        .pipe(gulp.dest('dist/js'));

    let buildFonts = gulp.src('app/fonts/**/*.*')
        .pipe(gulp.dest('dist/fonts'));

    let buildImg = gulp.src('app/img/**/*.*')
        .pipe(gulp.dest('dist/img'));
});

// Удаление папки Dist
gulp.task('clean', async function () {
    del.sync('dist')
});

// Удаление папки Dist и сборка проекта в папку Dist
gulp.task('build', gulp.series('clean', 'export'));

// Функция автоматического срабатывания тасков при сохранении scss, html, js
gulp.task('watch', function () {
    gulp.watch('app/scss/**/*.scss', gulp.parallel('scss'));
    gulp.watch('app/*.html', gulp.parallel('html'));
    gulp.watch('app/js/*.js', gulp.parallel('script'))
});

// Функция работы Gulp по умолчанию
gulp.task('default', gulp.parallel('css', 'scss', 'js', 'browser-sync', 'watch'))