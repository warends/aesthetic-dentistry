// Gulp.js configuration
'use strict';
const
  // ** change these two to yours **
  wordpress_project_name = 'aesthetic-dentistry',
  theme_name = 'aesthetic-dentistry',
//   browserSyncProxy = 'http://local.your-site.test/',
  // source and build folders, ** change this to yours **
  dir = {
    src         : '../../../wp-content/themes/${theme_name}/assets',
    build       : `../../../wp-content/themes/${theme_name}/`
  },
  // Gulp and plugins
  { src, dest, series, parallel, watch } = require('gulp'),
  noop          = require("gulp-noop"),
  newer         = require('gulp-newer'),
  imagemin      = require('gulp-imagemin'),
  sass          = require('gulp-sass'),
  postcss       = require('gulp-postcss'),
  deporder      = require('gulp-deporder'),
  concat        = require('gulp-concat'),
  stripdebug    = require('gulp-strip-debug'),
  uglify        = require('gulp-uglify'),
  browserSync   = require('browser-sync').create(),
  log           = require('fancy-log')
;
// For BrowserSync
const reload = (cb) => { browserSync.reload(); cb(); };

const images = {
    src         : dir.src + 'img/**/*',
    build       : dir.build + 'img/'
  };
  // image processing
  gulp.task('images', () => {
    return gulp.src(images.src)
      .pipe(newer(images.build))
      .pipe(imagemin())
      .pipe(gulp.dest(images.build));
  });

// CSS settings
var css = {
    src         : dir.src + 'scss/main.scss',
    watch       : dir.src + 'scss/**/*',
    build       : dir.build,
    sassOpts: {
      outputStyle     : 'nested',
      imagePath       : images.build,
      precision       : 3,
      errLogToConsole : true
    },
    processors: [
      require('postcss-assets')({
        loadPaths: ['images/'],
        basePath: dir.build,
        baseUrl: '/wp-content/themes/wptheme/'
      }),
      require('autoprefixer')({
        browsers: ['last 2 versions', '> 2%']
      }),
      require('css-mqpacker'),
      require('cssnano')
    ]
  };
  // CSS processing
  gulp.task('css', ['images'], () => {
    return gulp.src(css.src)
      .pipe(sass(css.sassOpts))
      .pipe(postcss(css.processors))
      .pipe(gulp.dest(css.build))
      .pipe(browsersync ? browsersync.reload({ stream: true }) : gutil.noop());
  });