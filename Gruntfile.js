
module.exports = function(grunt) {
    
    grunt.initConfig({
        sass: {
            build: {
                files: [{
                    src: 'src/scss/styles.scss',
                    dest: 'src/css/styles.css'
                }]
            }
        },
        concat: {
            js: {
                src: ['src/js/*.js'],
                dest: 'scripts.js'
            },
            css: {
                src: ['src/css/*.css'],
                dest: 'style.css'
            }
        },
        uglify: {
            build: {
                files: [{
                    src: 'scripts.js',
                    dest: 'scripts.js'
                }]
            }
        },
        cssmin: {
            build: {
                files: [{
                    src: 'style.css',
                    dest: 'style.css'
                }]
            }
        },
        watch: {
            css: {
                files: ['src/scss/*.scss'],
                tasks: ['sass', 'concat', 'uglify', 'cssmin']
            },
            js: {
                files: ['src/js/*.js'],
                tasks: ['sass', 'concat', 'uglify', 'cssmin']
            }
        }
    });

    // Plugins
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Tasks
    grunt.registerTask('default', ['sass', 'concat', 'uglify', 'cssmin']);

};