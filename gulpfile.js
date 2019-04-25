const gulp = require ("gulp");
const sass = require ("gulp-sass");

//Tarefas
gulp.task('default', watch);
gulp.task('sass', compilaSass);
//Funçõa para compilar o sass
function compilaSass(){
    return gulp
        .src("src/scss/**/*.scss")
        .pipe(sass({outputStyle: "nested"}).on("error", sass.logError))
        .pipe(gulp.dest("view/assets/css"));
}
//Função para assistir as mudanças de arquivos
function watch(){
    gulp.watch("src/scss/**/*.scss", compilaSass);
}