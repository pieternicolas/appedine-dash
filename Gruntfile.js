// AdminLTE Gruntfile
module.exports = function (grunt) {

  'use strict';

  grunt.initConfig({
    watch: {
      // If any .less file changes in directory "build/less/" run the "less"-task.
      less: {
        files: ["build/less/*.less", "build/less/skins/*.less", "dist/js/app.js"],
        tasks: ["less", "uglify"]
      },
      php: {
        files: ["user/*.php"],
        tasks: ["browserSync"]
      }
    },
    // "less"-task configuration
    // This task will compile all less files upon saving to create both AdminLTE.css and AdminLTE.min.css
    less: {
      // Development not compressed
      development: {
        options: {
          // Whether to compress or not
          compress: false
        },
        files: {
          // compilation.css  :  source.less
          "dist/css/AdminLTE.css": "build/less/AdminLTE.less",
          // AdminLTE without plugins
          "dist/css/alt/AdminLTE-without-plugins.css": "build/less/AdminLTE-without-plugins.less",
          // Separate plugins
          "dist/css/alt/AdminLTE-select2.css": "build/less/select2.less",
          "dist/css/alt/AdminLTE-fullcalendar.css": "build/less/fullcalendar.less",
          "dist/css/alt/AdminLTE-bootstrap-social.css": "build/less/bootstrap-social.less",
          //Non minified skin files
          "dist/css/skins/skin-black.css": "build/less/skins/skin-black.less",
        }
      },
      // Production compresses version
      production: {
        options: {
          // Whether to compress or not
          compress: true
        },
        files: {
          // compilation.css  :  source.less
          "dist/css/AdminLTE.min.css": "build/less/AdminLTE.less",
          // AdminLTE without plugins
          "dist/css/alt/AdminLTE-without-plugins.min.css": "build/less/AdminLTE-without-plugins.less",
          // Separate plugins
          "dist/css/alt/AdminLTE-select2.min.css": "build/less/select2.less",
          "dist/css/alt/AdminLTE-fullcalendar.min.css": "build/less/fullcalendar.less",
          "dist/css/alt/AdminLTE-bootstrap-social.min.css": "build/less/bootstrap-social.less",
          // Skins minified
          "dist/css/skins/skin-black.min.css": "build/less/skins/skin-black.less"
        }
      }
    },
    // Uglify task info. Compress the js files.
    uglify: {
      options: {
        mangle: true,
        preserveComments: 'some'
      },
      my_target: {
        files: {
          'dist/js/app.min.js': ['dist/js/app.js']
        }
      }
    },
    // Build the documentation files
    includes: {
      build: {
        src: ['*.html'], // Source files
        dest: 'documentation/', // Destination directory
        flatten: true,
        cwd: 'documentation/build',
        options: {
          silent: true,
          includePath: 'documentation/build/include'
        }
      }
    },

    // Optimize images
    image: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'build/img/',
          src: ['**/*.{png,jpg,gif,svg,jpeg}'],
          dest: 'dist/img/'
        }]
      }
    },

    // Validate JS code
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      core: {
        src: 'dist/js/app.js'
      },
      demo: {
        src: 'dist/js/demo.js'
      },
      pages: {
        src: 'dist/js/pages/*.js'
      }
    },

    // Validate CSS files
    csslint: {
      options: {
        csslintrc: 'build/less/.csslintrc'
      },
      dist: [
        'dist/css/AdminLTE.css'
      ]
    },

    // Validate Bootstrap HTML
    bootlint: {
      options: {
        relaxerror: ['W005']
      },
      files: ['pages/**/*.html', '*.html']
    },

    // Delete images in build directory
    // After compressing the images in the build/img dir, there is no need
    // for them
    clean: {
      build: ["build/img/*"]
    },

    browserSync: {
        dev: {
            bsFiles: {
                src: '/'
            },
            options: {
                proxy: '127.0.0.1:8010', //our PHP server
                port: 8080, // our new port
                open: true,
                watchTask: true
            }
        }
    },

    php: {
        dev: {
            options: {
              base: '',
              port: 8010,
                keepalive: true,
                open: true
            }
        }
    },

    concurrent: {
        options: {
            logConcurrentOutput: true
        },
        dev: {
            tasks: ["php","watch:less","watch:php"]
        }
    }
  });

  // Load all grunt tasks

  // LESS Compiler
  grunt.loadNpmTasks('grunt-contrib-less');
  // Watch File Changes
  grunt.loadNpmTasks('grunt-contrib-watch');
  // Compress JS Files
  grunt.loadNpmTasks('grunt-contrib-uglify');
  // Include Files Within HTML
  grunt.loadNpmTasks('grunt-includes');
  // Optimize images
  grunt.loadNpmTasks('grunt-image');
  // Validate JS code
  grunt.loadNpmTasks('grunt-contrib-jshint');
  // Delete not needed files
  grunt.loadNpmTasks('grunt-contrib-clean');
  // Lint CSS
  grunt.loadNpmTasks('grunt-contrib-csslint');
  // Lint Bootstrap
  grunt.loadNpmTasks('grunt-bootlint');
  // Grunt php
  grunt.loadNpmTasks('grunt-php');
  // Browser sync
  grunt.loadNpmTasks('grunt-browser-sync');
  // Grunt concurrent
  grunt.loadNpmTasks('grunt-concurrent');

  // Linting task
  grunt.registerTask('lint', ['jshint', 'csslint', 'bootlint']);

  // The default task (running "grunt" in console) is "watch"
  grunt.registerTask('default', ['watch']);

  // Live server php
  grunt.registerTask('server', ['php','browserSync']);

  grunt.registerTask("dev", ['concurrent:dev']);
};
