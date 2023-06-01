const express  = require("express");
const app = express();
const handlebars = require('express-handlebars');
const bodyParser = require('body-parser');
const Sequelize  = require("sequelize");
const sequelize = new Sequelize('db_node','root','',{host:'localhost', dialect:'mysql'});

sequelize.authenticate().then(function(){
    console.log("Conectou meu chapa!!");
}).catch(function(erro){
    console.log("Deu erro meu bom" +erro);
});

const Usuario = sequelize.define('tb_usuarios',{

    nome:{
        type: Sequelize.STRING
    },
    email:{
        type: Sequelize.TEXT
    },
    senha:{
        type: Sequelize.STRING
    },
    idade:{
        type: Sequelize.INTEGER
    }

});
//Usuario.sync({force:true});

//criar usuario forçando





app.use(bodyParser.urlencoded({extended:false}));
app.use(bodyParser.json());

//config hendlebars
app.engine('handlebars', handlebars.engine({defaultLayout: 'main'}));
app.set('view engine', 'handlebars');

//Rotas
/*app.get("/", function(req,res){
    res.sendFile(__dirname+"/views/index.html");
});
*/
app.get("/", function(req,res){
    res.render('formulario');
});

app.post("/addUsu", function(req,res){
    Usuario.create({
        nome:req.body.nome,
        email:req.body.email,
        senha:req.body.senha,
        idade:req.body.idade
    });
    res.send("cadastarado com sucesso");
});

app.get("/Visualizar", function(req,res){
    Usuario.findAll().then(function(elementos){
        res.render('Visualizar',{
            elementos: elementos 
        })
    })
});

//Mensagem para dizer que esta funcionando o servidor e setando a porta em que vai rodar
app.listen(8000, function(){
    console.log("Servidor Rodando")
});

