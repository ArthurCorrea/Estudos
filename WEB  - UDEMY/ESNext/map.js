// define um "objeto"
const tecnologias = new Map()
tecnologias.set('React', { framework: true })
tecnologias.set('Angular', { framework: true })

console.log(tecnologias.get('React').framework)
