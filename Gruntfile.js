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
					'wp-content/themes/abledtwentyfourteen/style.css': 'wp-content/themes/abledtwentyfourteen/sass/style.scss'
				}
			}
		},

		watch: {
			css: {
				files: 'wp-content/themes/abledtwentyfourteen/sass/*.scss',
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