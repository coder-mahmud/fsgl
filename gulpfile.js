const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const webpack = require('webpack');
var browserSync = require('browser-sync').create();
var concat = require('gulp-concat');
var themeLocation = './public/wp-content/themes/cwp-fsgl';

// .scss > .css
gulp.task('sass', ()=>
    gulp.src(themeLocation + '/sass/styles.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'nested'}).on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(themeLocation +'/assets/css'))
);

gulp.task('watch', ()=> {
	
	  browserSync.init({
	    notify: false,
	    proxy: 'http://fsgl.local/',
	    ghostMode: true
	  });		
	
	
    gulp.watch([
        themeLocation + '/sass/*.scss',
        themeLocation +'/sass/**/*.scss',
    ], gulp.series(['sass',]));
		
    gulp.watch([
        themeLocation +'/sass/*.scss',
        themeLocation +'/sass/**/*.scss',
    ], gulp.series(['inject',]));

			
    gulp.watch([
        themeLocation +'/assets/js/*.js',
    ], gulp.series(['scriptsRefresh']));

	
	
	
});


gulp.task('inject', ()=>{

	return gulp.src(themeLocation +'/assets/css/styles.css')
	.pipe(browserSync.stream());


});



gulp.task('scripts', (callback)=>{

	webpack(require('./webpack.config.js'), function(){
		console.log('webpack completed');
		callback();
	});


});

gulp.task('scriptsRefresh', gulp.series('scripts',function(callback){
	browserSync.reload();
	callback();
}));


gulp.task('default', gulp.series('sass', 'watch'));


// manual

gulp.task('concatScripts', function() {
  return gulp.src(themeLocation +'/assets/js/js-library/*.js')
    .pipe(concat('vendor.js'))
    .pipe(gulp.dest(themeLocation +'/assets/js/'));
});

gulp.task('concatStyles', function() {
  return gulp.src(themeLocation +'/assets/css/css-library/*.css')
    .pipe(concat('vendor.css'))
    .pipe(gulp.dest(themeLocation +'/assets/css/'));
});


