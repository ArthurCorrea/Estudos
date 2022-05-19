const produto01 = {}
produto01.nome = 'Celular'
produto01.preco = 999.90
produto01.categoria = 'Eletrônico'

console.log(produto01.nome, produto01.preco)

const produto02 = {
    nome: 'Camisa',
    preco: '89.90',
    categoria: 'Roupas',
    obj: {
        teste: 15,
        obj: {
            teste: 30
        }
    }
}

console.log(produto02.obj.obj.teste)