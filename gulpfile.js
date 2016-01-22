var gulp = require('gulp');
var concatCss = require('gulp-concat-css');
var minifyCss = require('gulp-minify-css');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');
var gutil = require('gulp-util');
var webpack = require('webpack');
var stream = require('webpack-stream');
var livereload = require('gulp-livereload');

var path = {
    SCSS: ['src/scss/**/*.*'],
    JS: ['src/js/**/*.*'],
    ALL: ['src/js/**/*.*'],
    DEST_BUILD: 'public/assets/js',
    DEST: 'dist'
};

gulp.task('scss', function () {
  return gulp.src( path.SCSS )
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(concatCss('bundle.css'))
    .pipe(autoprefixer({
        browsers: [
            '> 1%',
            'last 2 versions',
            'firefox >= 4',
            'safari 7',
            'safari 8',
            'IE 8',
            'IE 9',
            'IE 10',
            'IE 11'
        ],
        cascade: false
    }))
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(gulp.dest('public/assets/css/'))
    .pipe(livereload());
});

gulp.task('webpack', function(callback) {

    webpack({
        cache: true,
        debug: true,
        devtool: 'eval',
        entry: {
            global: './src/js/app.js',
        },
        output: {
            path: __dirname + "/public/assets/js",
            filename: 'bundle.js',
            chunkFilename: '[name].js'
        },
        resolve: {
            extensions: ['', '.js']
        }
    }, function(err, stats) {
        if (err) throw new gutil.PluginError("webpack", err);
        gutil.log("[webpack]", stats.toString({ colors: true }));

        callback();
    });
});

gulp.task('watch', function(){
    livereload.listen();
    gulp.watch('craft/templates/**', livereload());
    gulp.watch(path.SCSS, ['scss']);
    gulp.watch(path.JS, ['webpack']);
});

gulp.task('default', ['watch']);
gulp.task('compile', ['scss', 'webpack']);