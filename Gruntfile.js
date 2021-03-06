/* run 'grunt' to listen for changes */

(function () {
   'use strict';
}());
module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: ['resources/scripts/*.js'],
                dest: 'public_html/js/adaptivenav.js'
            }
        },

        uglify: {
            options: {
                banner: '/* \nProject Name: AdaptiveNav \nAuthor: Andrew S. Gardner \nAuthor URI: http://www.andrewsgardner.com \nVersion: 2.0 \nLicense: MIT \n*/\n'
            },
            dist: {
                files: {
                    'public_html/js/adaptivenav.min.js': ['public_html/js/adaptivenav.js']
                }
            }
        },
        
        sass: {
            options: {
                sourceMap: false,
                sourceComments: false
            },
            dist: {
                files: {
                    'public_html/css/adaptivenav.css': 'resources/scss/main.scss'
                }
            }
        },
        
        cssmin: {
            target: {
                files: {
                    'public_html/css/adaptivenav.min.css': 'public_html/css/adaptivenav.css'
                }
            }
        },
        
        watch: {
            files: ['resources/scss/**/*.scss', 'resources/scripts/*.js', 'public_html/css/adaptivenav.css'],
            tasks: ['concat', 'uglify', 'sass', 'cssmin']
        }

    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', ['concat', 'uglify', 'cssmin', 'watch']);
};