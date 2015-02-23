module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

		sass: {
			dist: {
				options: {
					style: 'compressed'
				},
				files: {
					'access/abled-content/themes/abled-twentyfourteen/style.css': 'access/abled-content/themes/abled-twentyfourteen/sass/style.scss'
				}
			}
		},

		watch: {
			css: {
				files: 'access/abled-content/themes/abled-twentyfourteen/sass/*.scss',
				tasks: ['sass'],
			},
		},

  });

  // Load the plugins.
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['watch']);

};