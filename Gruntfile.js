module.exports = function(grunt) {
  // Project config
  grunt.initConfig({
    // Read the package file
    pkg: grunt.file.readJSON('package.json'),
    // Spell out the tasks
    jshint: {
      all: ['Gruntfile.js', 'themes/iamgarrett/javascripts/site.js']
    },
    uglify: {
      min: {
        files: {
          'themes/iamgarrett/javascripts/site.min.js': ['themes/iamgarrett/javascripts/partials/picturefill.min.js']
        }
      }
    },
    compass: {
      dist: {
        options: {
          config: 'themes/iamgarrett/config.rb',
          force: true
        }
      }
    },
    watch: {
      css: {
        files: ['themes/iamgarrett/sass/**/*.scss'],
        tasks: ['compass:dist']
      },
      js: {
        files: ['themes/iamgarrett/javascripts/partials/**/*.js'],
        tasks: ['jshint:all', 'uglify:min']
      }
    },
    browserSync: {
      dev: {
        bsFiles: {
          src : 'themes/iamgarrett/*.css'
        },
        options: {
          proxy: "allmybooks.dev",
          watchTask: true // < VERY important
        }
      }
    }
  });
  
  // Load the plugin that provides the task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');
  
  // Default task(s).
  grunt.registerTask('default', ['watch']);
};