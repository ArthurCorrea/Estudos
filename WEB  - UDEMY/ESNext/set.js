// não aceita repetição e não tem índice
const times = new Set()
times.add('Cruzeiro')
times.add('São Paulo').add('Palmeiras').add('Atlético')

console.log(times)
console.log(times.size)
times.delete('Palmeiras')
console.log(times)