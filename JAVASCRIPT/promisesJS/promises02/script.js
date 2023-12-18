//? forma comum
function sumNumbers() {
    let result = 1 + 1;

    if(result === 2) {
        successCallback();
    } else {
        errorCallback();
    }
}

function successCallback() {
    console.log('soma correta');
}

function errorCallback() {
    console.log('função deu errado.');
}

sumNumbers()

//? =====================================

//? forma com promises

let somaNumeros = new Promise( (resolve, reject) => {
    let num = 1 + 1;
    if(num === 2) {
        resolve('sucesso')
    } else {
        reject('erro')
    }
})

somaNumeros.then((message) => {
    console.log(`Sucesso: ${message}`);
}).catch((err) => {
    console.log(`Erro: ${err}`);
})

//? exemplo mais real

const divUsers = document.getElementById('users')
const url = 'https://jsonplaceholder.typicode.com/users'

fetch(url)
    .then((resp) => resp.json())
    .then(function(data) {
        console.log(data);

        return data.map(function(user) {
            let li = document.createElement('li');
            li.innerHTML = `${user.name} (${user.username})`
            divUsers.appendChild(li)
        })
    }).catch((error) => {
        console.log(`error: ${error}`);
    })