// sintaxe
function primeiraFuncao() {
    return new Promise((resolve) =>{

        setTimeout(() => {
            console.log('esperou');
            resolve();
        }, 2000)

    }) 

}

async function segundaFuncao() {

    console.log('Iniciou');

    await primeiraFuncao();

    console.log('Terminou');

}

segundaFuncao();

//? algo mais prático com consumo de API
function getUser(id) {
    return fetch(`https://reqres.in/api/users?id=${id}`)
        .then(data => data.json())
        .catch(err => console.log(err));
}

async function showUserName(id) {
    try {
        const user = await getUser(id)
        console.log(`Nome de usuário: ${user.data.first_name}`);
    
    } catch (error) {
        console.log(`erro: ${error}`);    
    }

}

showUserName(12)

