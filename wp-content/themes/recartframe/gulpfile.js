//Подключаем галп
const gulp = require('gulp');
//Объединение файлов
const concat = require('gulp-concat');
//Добапвление префиксов
const autoprefixer = require('gulp-autoprefixer');
//Оптисизация стилей
const cleanCSS = require('gulp-clean-css');
//Оптимизация скриптов
const uglify = require('gulp-uglify');
//Удаление файлов
const del = require('del');
//Синхронизация с браузером
const browserSync = require('browser-sync').create();
//Для препроцессоров стилей
const sourcemaps = require('gulp-sourcemaps');
//Sass препроцессор
const sass = require('gulp-sass')(require('sass'));


//Порядок подключения файлов со стилями
const styleFiles = [
   './src/scss/selectric.scss',
   './src/scss/slick.scss',
   './src/scss/main.scss'


]
//Порядок подключения js файлов
const scriptFiles = [
   './src/js/jquery-3.5.1.js',
   './src/js/jquery.viewbox.min.js',
   './src/js/owl.carousel.min.js',
   './src/js/lightslider.js',
   './src/js/moment-with-locales.js',
   // './src/js/bootstrap-datetimepicker.js',
   // './src/js/aos.js',
   './src/js/jquery.datetimepicker.js',
   './src/js/jquery.selectric.js',
   './src/js/slick.js',
   './src/js/fresco.min.js',
   './src/js/scripts.js'

]

//Таск для обработки стилей
gulp.task('sass', () => {
   //Шаблон для поиска файлов CSS
   //Всей файлы по шаблону './src/css/**/*.css'
   return gulp.src(styleFiles)
      .pipe(sourcemaps.init())
      //Указать stylus() , sass() или less()
      .pipe(sass())
      //Объединение файлов в один
      .pipe(concat('style.css'))
      //Добавить префиксы
      .pipe(autoprefixer({
         Browserslist: ['last 2 versions'],
         cascade: false
      }))
      //Минификация CSS
      .pipe(cleanCSS({
         level: 2
      }))
      .pipe(sourcemaps.write('./'))
      //Выходная папка для стилей
      .pipe(gulp.dest('./dist/css'))
      .pipe(browserSync.stream());
});

//Таск для обработки скриптов
gulp.task('scripts', () => {
   //Шаблон для поиска файлов JS
   //Всей файлы по шаблону './src/js/**/*.js'
   return gulp.src(scriptFiles)
      //Объединение файлов в один
      .pipe(concat('common.js'))
      //Минификация JS
      .pipe(uglify({
         toplevel: true
      }))
      //Выходная папка для скриптов
      .pipe(gulp.dest('./dist/js'))
      .pipe(browserSync.stream());
});

//Таск для очистки папки build
gulp.task('del', () => {
   return del(['dist/css/style.css.map' , 'dist/css/style.css', 'dist/js/common.js'])
});

//Таск для отслеживания изменений в файлах
gulp.task('watch', () => {
   // browserSync.init({
   //    server: {
   //       baseDir: "./"
   //    }
   // });
   //Следить за файлами со стилями с нужным расширением
   gulp.watch('./src/scss/**/*.scss', gulp.series('sass'))
   //Следить за JS файлами
   gulp.watch('./src/js/**/*.js', gulp.series('scripts'));
   //При изменении HTML запустить синхронизацию
   // gulp.watch("./*.html").on('change', browserSync.reload);
});

//Таск по умолчанию, Запускает del, styles, scripts и watch
gulp.task('default', gulp.series('del', gulp.parallel('sass', 'scripts'), 'watch'));