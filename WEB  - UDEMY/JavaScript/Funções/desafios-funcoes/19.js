/* 19) O cardápio de uma lanchonete é o seguinte:
Código Descrição do Produto Preço
1 Cachorro Quente R$ 3,00
2 Hambúrguer Simples R$ 4,00
3 Cheeseburguer R$ 5,50
4 Bauru R$ 7,50
5 Refrigerante R$ 3,50
6 Suco R$ 2,80
Implemente uma função que receba como parâmetros o código do item pedido, a quantidade e calcule o valor
a ser pago por aquele lanche. Considere que a cada execução somente será calculado um item. Use o
comando switch. Crie um caso default para produto não existente. */

const pedido = (codigo, quantidade) => {
    
    switch(codigo) {
        case 1:
            console.log(`Valor do pedido: R$${(quantidade * 3).toFixed(2).replace('.', ',')}`)
            break;
        case 2:
            console.log(`Valor do pedido: R$${(quantidade * 4).toFixed(2).replace('.', ',')}`)
            break;
        case 3:
            console.log(`Valor do pedido: R$${(quantidade * 5.5).toFixed(2).replace('.', ',')}`)
            break;
        case 4:
            console.log(`Valor do pedido: R$${(quantidade * 7.5).toFixed(2).replace('.', ',')}`)
            break;
        case 5:
            console.log(`Valor do pedido: R$${(quantidade * 3.5).toFixed(2).replace('.', ',')}`)
            break;
        case 6:
            console.log(`Valor do pedido: R$${(quantidade * 2.8).toFixed(2).replace('.', ',')}`)
            break;
        default:
            console.log('Inválido.')
            break;
    }
}

pedido(1, 6)
pedido(7, 4)
pedido(4, 3)