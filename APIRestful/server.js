const express = require('express');
const app = express()
const data = require('./data.json');

app.use(express.json());

//? verbos HTTP
// GET: recebe dados de um Resource
// POST: Envia dados ou informações para serem processadas por um Resource
// PUT: Atualiza dados de um Resource
// DELETE: Deleta um Resource

/* 
    * http://localhost:3000/clients - URI 
    ? clients = Resource
*/

// '/clients' é um endpoint
app.get("/clients", function(req, res){
    res.json(data)
}) 

//? para pegar um item, é possível passar um parâmetro:
app.get("/clients/:id", function(req, res){
    const { id } = req.params
    const client = data.find(cli => cli.id == id);

    if(!client) {
        return res.status(204).json();
    }

    res.json(client);
})


app.post("/clients", function(req, res){
    const { name, email } = req.body;

    // salvar

    res.json({name, email});
}) 

app.put("/clients", function(req, res){
    const { id } = req.params
    const client = data.find(cli => cli.id == id);

    if(!client) {
        return res.status(204).json();
    }

    const { name } = req .body;
    client.name = name;

    res.json(client);
})

app.delete("/clients", function(req, res){
    const { id } = req.params
    const clientsFiltered = date.filter(client => client.id != id)

    res.json(clientsFiltered);
})



app.listen(3002, function() {
    console.log('rodando server');
})