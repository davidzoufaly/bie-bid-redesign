module.exports = function(grunt) {
    // Project configuration.
    grunt.initConfig({
      pkg: grunt.file.readJSON("package.json"),
      concat: {
        //? 1) COMPILE JS - vem všechny scripty
          // moje
          header: {
            src: ["./js/header/*.js"],
            dest: "./js/scripts.header.min.js"
          },
          footer: {
            src: ["./js/footer/*.js"],
            dest: "./js/scripts.footer.min.js"
          },
          homepage: {
            src: ["./js/homepage/*.js"],
            dest: "./js/scripts.homepage.min.js"
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
            "./js/scripts.footer.min.js" : ["./js/scripts.footer.min.js"],
            "./js/scripts.header.min.js" : ["./js/scripts.header.min.js"],
            "./js/scripts.homepage.min.js" : ["./js/scripts.homepage.min.js"]
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
            "./js/scripts.footer.min.js" : "./js/scripts.footer.min.js",
            "./js/scripts.header.min.js" : "./js/scripts.header.min.js",
            "./js/scripts.homepage.min.js" : "./js/scripts.homepage.min.js"
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
          style: "compressed"
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
  