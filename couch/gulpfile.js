'use strict'
const gulp = require("gulp");
const autoprefixer = require("gulp-autoprefixer");
const browsersync = require("browser-sync").create();


function cssStyle() {
   return gulp.src('./css/css/**/style.css')
    
   .pipe(autoprefixer({
    cascade: false
}))
    .pipe(gulp.dest('./build/.css'))
    .pipe(browsersync.stream())
}


function browserSync(done) {
    browsersync.init({
      server: {
        baseDir: "./"
      },
      port: 3000,
    });
    done();
  }

function reload() {
    return browserSync.reload()
}

function watchFiles(done) {
    gulp.watch("./css/css/**/*",  gulp.parallel(cssStyle), browserSync.reload);
    gulp.watch("/*.html", browserSync.reload);

done();
}

gulp.task('default', gulp.parallel(browserSync, watchFiles));
