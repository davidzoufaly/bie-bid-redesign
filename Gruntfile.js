module.exports = function(grunt) {
    // Project configuration.
    grunt.initConfig({
      pkg: grunt.file.readJSON("package.json"),
      concat: {
        //? 1) COMPILE JS - vem všechny scripty
        outsourced: {
          // moje
          src: "./js/esnext/*.js",
          dest: "./js/scripts.min.js"
        }
      },
      babel: {
        //? 2) JS ES5 - vem MOJE spojené scripty v ESNext a převěď je na ES5.
        options: {
          sourceMap: false,
          presets: ["@babel/preset-env"]
        },
        dist: {
          files: {
            // vlevo dest, vpravo source
            "./js/scripts.min.js": "./js/scripts.min.js"
          }
        }
      },
      uglify: {
        //? 3) mimified JS - vem spojené scripty a mimifikuj je
        options: {
          mangle: false,
          comments: false
        },
        my_target: {
          files: {
            // vlevo dest, vpravo source
            "./js/scripts.min.js": ["./js/scripts.min.js"]
          }
        }
      },
      //! CSS SEKCE
      concat_css: {
        options: {
          sourcemap: "none"
        },
        //? 4) COMPILE CSS - spoj všechny scss do jednoho
        my: {
          src: ["./style/scss/**/*.scss"],
          dest: "./style/main.scss"
        }
      },
      sass: {
        //? 5) SCSS -> mimified CSS - vem komplet.scss, převeď ho na css a zmimifikuj
        options: {
          style: "compressed",
          sourcemap: "none"
        },
        my: {
          files: {
            // vlevo dest, vpravo source
            "./style/main.css": "./style/main.scss"
          }
        }
      },
      autoprefixer: {
        //? 6) PREFIX CSS - vem zmimifikovaný komplet.css a prefixni ho pro starší verze prohlížeče
        options: {
          browsers: ["last 3 versions", "ie 9"]
        },
        dist: {
          src: "./style/main.css",
          dest: "./style/main.css"
        }
      }
    });
  
    // Loads
    grunt.loadNpmTasks("grunt-contrib-uglify");
    grunt.loadNpmTasks("grunt-contrib-concat");
    grunt.loadNpmTasks("grunt-babel");
    grunt.loadNpmTasks("grunt-contrib-sass");
    grunt.loadNpmTasks("grunt-concat-css");
    grunt.loadNpmTasks("grunt-autoprefixer");
  
    // Tasks
    grunt.registerTask("default", [
      "concat",
      "babel",
      "uglify",
      "concat_css",
      "sass",
      "autoprefixer"
    ]);
    grunt.registerTask("doCSS", ["concat_css", "sass", "autoprefixer"]);
    grunt.registerTask("doJS", ["concat", "babel", "uglify"]);
  };
  