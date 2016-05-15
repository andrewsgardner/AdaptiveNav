/* run 'grunt' to listen for changes */

(function () {
   'use strict';
}());
module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            options: {
                separator: 'rnrn'
            },
            dist: {
                src: ['resources/scripts/*.js'],
                dest: 'public_html/js/adaptivenav.js'
            }
        },

        uglify: {
            options: {
                banner: '/*! &lt;%= pkg.name %&gt; &lt;%= grunt.template.today("dd-mm-yyyy") %&gt; */n'
            },
            dist: {
                files: {
                    'public_html/js/adaptivenav.min.js': ['public_html/js/adaptivenav.js'],
                    'public_html/css/adaptivenav.min.css': ['public_html/css/adaptivenav.css']
                }
            }
        },
        
        sass: {
            options: {
                sourceMap: true,
                sourceComments: false
            },
            dist: {
                files: {
                    'public_html/css/adaptivenav.css': 'resources/scss/main.scss'
                }
            }
        },

        watch: {
            files: ['resources/scss/**/*.scss', 'resources/scripts/*.js'],
            tasks: ['concat', 'uglify', 'sass']
        }

    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', ['concat', 'uglify', 'sass', 'watch']);
};