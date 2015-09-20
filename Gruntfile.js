module.exports = function(grunt) {
    grunt.registerTask('default', ['build']);
    grunt.registerTask('dev', ['build', 'concurrent']);

    grunt.registerTask('build', ['clean', 'copy', 'styles', 'scripts', 'uglify']);

    grunt.registerTask('styles', ['sass']);
    grunt.registerTask('scripts', ['jshint', 'concat']);

    // 'shell:bower',

    grunt.initConfig({
        // shell: {
        //     // install bower packages
        //     bower: {
        //         command: 'node_modules/bower/bin/bower install'
        //     },
        //     server: {
        //         command: 'cd build; php -S localhost:3005'
        //     }
        // },

        clean: {
            build: {
                src: ['build']
            }
        },

        copy: {
            images: {
                files: [{
                    expand: true,
                    cwd: 'src/img/',
                    src: ['**/*'],
                    dest: 'build/img'
                }]
            },
            fonts: {
                files: [{
                    expand: true,
                    cwd: 'src/fonts',
                    src: ['**/*'],
                    dest: 'build/fonts'
                }]
            },
            php: {
                files: [{
                    expand: true,
                    cwd: 'src/php',
                    src: ['**/*.php'],
                    dest: 'build'
                }]
            },
              pem: {
                files: [{
                    expand: true,
                    cwd: 'src/php',
                    src: ['**/*.pem'],
                    dest: 'build'
                }]
            },
        },

        sass: {
            options: {
                outputStyle: 'compressed'
            },
            dist: {
                files: {
<<<<<<< HEAD
                    'build/style.css' : 'src/scss/style.scss'
=======
                    'build/style.css': 'src/scss/style.scss'
>>>>>>> 03e36f704c72af653997ba630ae04e60fbe21dd3
                }
            }
        },


        // Scripts
        jshint: {
            options: {
                curly: true,
                eqeqeq: true,
                forin: true,
                freeze: false,
                immed: true,
                indent: 4,
                latedef: true,
                newcap: true,
                noarg: true,
                noempty: true,
                devel: true,
                nonbsp: true,
                nonew: true,
                plusplus: false,
                quotmark: 'single',
                undef: true,
                unused: true,
                strict: false,
                maxparams: 4,
                maxdepth: 4,
                maxlen: 120,
                trailing: true,
                globals: {
                    angular: true,
                    console: false,
                    require: false,
                    data: false,
                    $: false,
                    jQuery: false,
                    google: false
                }
            },
            grunt: {
                options: {
                    node: true
                },
                src: ['Gruntfile.js']
            },
            build: {
                options: {
                    browser: true
                },
                src: [
                    'src/js/**/*.js'
                ]
            }
        },
        concat: {
            build: {
                options: {
                    separator: ';\n'
                },
                src: [
                    'src/js/**/*.js'
                ],
                dest: 'build/js/scripts.js'
            }
        },
        uglify: {
            options: {
                beautify: false,
                compress: {
                    global_defs: {
                        'DEBUG': false
                    },
                    dead_code: true
                }
            },
            my_target: {
                files: {
                    'build/js/scripts.js': ['src/js/js.js']
                }
            }
        },

        concurrent: {
            dev: {
                tasks: ['watch'],
                options: {
                    logConcurrentOutput: true
                }
            }
        },

        // 'shell:server',
        // Watch
        watch: {
            sass: {
                files: ['src/scss/**/*.scss'],
                // runs the task `sass` whenever any watched file changes 
                tasks: ['sass']
            },
            js: {
                files: ['src/js/**/*.js'],
                tasks: ['scripts'],
                options: {
                    spawn: false,
                    livereload: true
                }
            },
            php: {
                files: ['src/php/**/*.php'],
                tasks: ['copy:php'],
                options: {
                    spawn: false,
                    livereload: true
                }
            },
            fonts: {
                files: ['src/fonts/**/*'],
                tasks: ['copy:fonts'],
                options: {
                    spawn: false,
                    livereload: true
                }
            },
            images: {
                files: ['src/img/**/*'],
                tasks: ['copy:images'],
                options: {
                    spawn: false,
                    livereload: true
                }
            }
        }
    });

    // grunt.loadNpmTasks('grunt-shell');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-copy');

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.loadNpmTasks('grunt-concurrent');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-sass');
};