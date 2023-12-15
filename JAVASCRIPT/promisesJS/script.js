// criação de promessa
const myPromise = new Promise((resolve, reject) => {
    const nome = "Arthur";

    if(nome === "Arthur") {
        resolve('Usuário encontrado')
    } else {
        reject('O usuário não foi encontrado')
    }
})

myPromise.then(data => {
    console.log(data);
})

// Encadeamento de then's

const myPromise2 = new Promise((resolve, reject) => {
    const nome = "Arthur";

    if(nome === "Arthur") {
        resolve('Usuário ENCONTRADO')
    } else {
        reject('O usuário não foi encontrado')
    }
})

myPromise2.then((data) => {
    const stringModificada = data.toLowerCase()
    console.log(stringModificada);
})

// Retorno do catch
const myPromise3 = new Promise((resolve, reject) => {
    const nome = "João";

    if(nome === "Arthur") {
        resolve('Usuário encontrado')
    } else {
        reject('O usuário não foi encontrado')
    }
})

//? o catch não deixa o fluxo do código ser interrompido
myPromise3
    .then(data => {
        console.log(data);
    })
    .catch(erro => {
        console.log(`Aconteceu um erro: ${erro}`);
    })

// resolver várias promessas

const p1 = new Promise((resolve, reject) => {
    resolve('p1ok');
})

const p2 = new Promise((resolve, reject) => {
    resolve('p2ok');
})

const p3 = new Promise((resolve, reject) => {
    setTimeout(() => {
        resolve('Resolve 3, ok!')
    }, 2000)
})

const resolveAll = Promise.all([p1, p2, p3]).then(data => {
    console.log(data);
})

console.log('já foi executado antes do all()');

// várias promessas com race
const p4 = new Promise((resolve, reject) => {
    resolve('p5 ok');
})

const p5 = new Promise((resolve, reject) => {
    resolve('p2ok');
})

const p6 = new Promise((resolve, reject) => {
    setTimeout(() => {
        resolve('Resolve 3, ok!')
    }, 2000)
})

// pega a primeira promise resolvida
const resolveAllRace = Promise.race([p4, p5, p6]).then(data => {
    console.log(data);
})


//? Fetch request na API do Github
// Fetch API

const userName = 'arthurcorrea'

fetch(`https://api.github.com/users/${userName}`, {
    method: 'GET',
    headers: {
        Accept: 'application/vnd.github.v3+json',
    },
}).then((response) => {
    console.log(typeof response);
    console.log(response);
    return response.json()
}).then(data => {
    console.log(`Nome do usuário: ${data.name}`);
}).catch(err => {
    console.log(`Houve um erro: ${err}`);
})
