const Sequelize  = require("sequelize");
const sequelize = new Sequelize('db_node','root','',{host:'localhost', dialect:'mysql'});

sequelize.authenticate().then(function(){
    console.log("Conectou meu chapa!!");
}).catch(function(erro){
    console.log("Deu erro meu bom" +erro);
});

//criando a tabela

const Usuario = sequelize.define('tb_usuario',{

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

/*
Usuario.create({
    nome:"Pedro",
    email:"pedro@gmail.com",
    senha:"123",
    idade:18
});
*/