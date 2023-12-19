//? montando promises
function bestRockBand(band) {
    return new Promise((resolve, reject) => {
        if(band == 'Queen') {
            resolve({
                success: true,
                bandName: band,
                message: `A melhor banda é: ${band}!`
            });
        } else {
            reject({
                success: false,
                message: `Não sei.`
            });
        }
    });
}

function bestRockSong(response) {
    return new Promise((resolve, reject) => {
        if(response.success) {
            resolve(`Bohemian Rhapsody by ${response.bandName}`)
        } else {
            reject(`Não sei também.`)
        }
    })
}

// ? forma convencional de chamar as promises com .then
/*bestRockBand('Queen')
    .then(response => {
        console.log('Verificando resposta...');
        return bestRockSong(response)
    })
    .then(response => {
        console.log('Encontrando a música...');
        console.log(response);
    }).catch(err => {
        console.log(err.message);
    })
*/

//? usando async await
async function doFunctions() {
    try {
        const bestBand = await bestRockBand('Queen');
        console.log(bestBand);
        const bestSong = await bestRockSong(bestBand);
        console.log(bestSong);
    } catch (error) {
        console.log(error.message);
    }
}

doFunctions();

//? =================