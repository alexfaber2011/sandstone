module.exports = function(grunt) {
    grunt.initConfig({
        less: {
            development: {
                options: {
                    paths: ["./wp-content/themes/sandstone/library/less"],
                    yuicompress: true
                },
                files: {
                    "./wp-content/themes/sandstone/library/css/bootstrap.css": "./wp-content/themes/sandstone/library/less/bootstrap.less"
                }
            }
        },
        watch: {
            files: "./wp-content/themes/sandstone/library/less/*",
            tasks: ["less"]
        }
    });
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
};