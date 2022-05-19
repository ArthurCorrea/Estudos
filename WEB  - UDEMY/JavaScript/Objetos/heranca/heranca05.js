
//implementando nova função
String.prototype.reverse = function() {
    return this.split('').reverse().join('')
}

console.log('Arthur'.reverse()) 

Array.prototype.first = function() {
    return this[0]
}

console.log([6, 4, 3, 2, 5, 6, 8].first())