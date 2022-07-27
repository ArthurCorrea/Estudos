const gulp = require ('gulp')
const series = gulp.series

const antes1 = callback => {
    console.log('Tarefa de antes01.')
    return callback()
}

const antes2 = callback => {
    console.log('Tarefa de antes02.')
    return callback()
}

const fim = callback => {
    console.log('Tarefa final.')
    return callback()
}

function copiar(callback) {
    // gulp.src(['pastaA/**/*.txt'])  pega qualquer arquivo com a extensão .txt
    gulp.src(['pastaA/arquivo1.txt', 'pastaA/arquivo2.txt'])
        .pipe(gulp.dest('pastaB'))
    return callback()
}

module.exports.default = series(
    antes1, 
    antes2, 
    copiar, 
    fim,
)