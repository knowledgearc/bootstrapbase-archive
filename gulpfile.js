var gulp = require('gulp');
var del = require('del');
var rm = require( 'gulp-rm' )

// Settings for Jcar Project
// gulp.task('clean:templates', function () {
  // return del([
  // // clean everything old files inside templates before copying new changed files
    // 'D:/projects/htdocs/projects/jcar/templates/knowledgearchive/**/*'
      // ],
	  // {
		  // force: true
	  // });
// });

// // gulp.task( 'clean:templates', function() {
  // // return gulp.src( 'D:/projects/htdocs/projects/jcar/templates/knowledgearchive/**/*', { read: false })
    // // .pipe( rm() )
// // })


// gulp.task('copy', ['clean:templates'], function () {
        // return gulp.src(['templates/knowledgearchive/**/*'], {
            // base: 'templates'
        // }).pipe(gulp.dest('D:/projects/htdocs/projects/jcar/templates'));
    // });

// gulp.task('watch', function(){
	// gulp.watch('templates/knowledgearchive/**/*', ['copy']);
// });
// gulp.task('default', ['copy']);


//Settings for Jcar Project
gulp.task('clean:scss', function () {
  return del([
  // clean everything old files inside templates before copying new changed files
    'D:/projects/htdocs/projects/oda_html/templates/knowledgearchive/scss/**/*'
      ],
	  {
		  force: true
	  });
});

gulp.task('clean:js', function () {
  return del([
  // clean everything old files inside templates before copying new changed files
    'D:/projects/htdocs/projects/oda_html/templates/knowledgearchive/js/**/*'
      ],
	  {
		  force: true
	  });
});

gulp.task('clean:html', function () {
  return del([
  // clean everything old files inside templates before copying new changed files
    'D:/projects/htdocs/projects/oda_html/templates/knowledgearchive/html/**/*'
      ],
	  {
		  force: true
	  });
});

// gulp.task( 'clean:templates', function() {
  // return gulp.src( 'D:/projects/htdocs/projects/jcar/templates/knowledgearchive/**/*', { read: false })
    // .pipe( rm() )
// })


gulp.task('copy-scss', ['clean:scss'], function () {
        return gulp.src(['templates/knowledgearchive/scss/**/*'], {
            base: 'templates'
        }).pipe(gulp.dest('D:/projects/htdocs/projects/oda_html/templates'));
    });
	
gulp.task('copy-js', ['clean:js'], function () {
        return gulp.src(['templates/knowledgearchive/js/**/*'], {
            base: 'templates'
        }).pipe(gulp.dest('D:/projects/htdocs/projects/oda_html/templates'));
    });
	
gulp.task('copy-html', ['clean:js'], function () {
        return gulp.src(['templates/knowledgearchive/html/**/*'], {
            base: 'templates'
        }).pipe(gulp.dest('D:/projects/htdocs/projects/oda_html/templates'));
    });

gulp.task('watch', function(){
	gulp.watch('templates/knowledgearchive/**/*', ['copy-scss', 'copy-js', 'copy-html']);
});
gulp.task('default', ['copy']);

