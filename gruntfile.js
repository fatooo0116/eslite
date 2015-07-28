
module.exports = function(grunt){

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-compass');



    grunt.initConfig({
        uglify:{
            my_target:{
                files:{
                    'js/script.js':[
                        '_/components/js/*.js'
                    ]
                }// files
            }//my_target
        },  // uglify

        sass: { // sass tasks
            dist: {
                options: {
                    compass: true, // enable the combass lib, more on this later
                    style: 'nested' // we don't want to compress it
                },
                files: {
                    'css/bootstrap.css': '_/components/sass/bootstrap.scss',
                    'css/style.css': '_/components/sass/style.scss'
                }
            }
        },





        watch:{
            options:{livereload: true},
            scripts:{
                files:[
                    '_/components/js/*.js'
                   ],
                tasks:['uglify']
            },
            sass:{
                files:'**/*.scss',
                tasks:['sass']
            },
            html:{
                files:[
                    '*.php'
                ],
            }
        }
    }); // initConfig

    /* Just key grunt  */
    grunt.registerTask('default','watch');

} //exports
