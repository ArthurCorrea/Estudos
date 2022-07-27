const gulp = require('gulp')
const webserver = require('gulp-webserver')
const {watch, series} = require('gulp')
     
function monitorarArquivos(callback) {
    watch('src/**/*.html', series('appHTML'))
    watch('src/**/*.scss', series('appCSS'))
    watch('src/**/*.js', series('appJS'))
    watch('src/assets/imgs/**/*.*', series('appIMG'))
    return callback()
}

const servidor = () => {
    return gulp.src('build')
        .pipe(webserver({
            port: 8080,
            open: true,
            livereload: true
        }))
}

// const monitorarArquivos = (callback) => {
//     watch('src/**/*.html', () => gulp.series('appHTML')())
//     watch('src/**/*.scss', () => gulp.series('appCSS')())
//     watch('src/**/*.js', () => gulp.series('appJS')())
//     watch('src/assets/imgs/**/*.*', () => gulp.series('appIMG')())

//     return callback()
// }


module.exports = {
    monitorarArquivos,
    servidor
}