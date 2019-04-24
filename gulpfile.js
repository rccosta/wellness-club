const gulp = require ("gulp");
const sass = require ("gulp-sass");

//Tarefas
gulp.task('default', watch);
gulp.task('sass', compilaSass);
//Funçõa para compilar o sass
function compilaSass(){
    return gulp
        .src("src/sass/**/*.scss")
        .pipe(sass({outputStyle: "compressed"}).on("error", sass.logError))
        .pipe(gulp.dest("build/css"));
}
//Função para assistir as mudanças de arquivos
function watch(){
    gulp.watch("src/sass/**/*.scss", compilaSass);
}