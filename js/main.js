// referenciando o button
let btn = document.querySelector('#botao');

// referenciando o input nome
let nome = document.querySelector('input[name=nome]');

// referenciando o input email
let email = document.querySelector('input[name=email]');

// referenciando o input telefone
let telefone = document.querySelector('input[name=telefone]');

// referenciando o input arquivo
let arquivo = document.querySelector('input[name=arquivo]');


// verificar o clique no botão
btn.onclick = function(e){

  //console.log(arquio.value);
    //e.preventDefault();
    // validar o valor, se foi digitada nova tarefa
    if(nome.value !=="" && email.value !=="" && telefone.value !==""){

     /* axios.post(`./salva_bd.php`,{
            nome: nome.value,
            email: email.value,
            telefone: telefone.value
      })
        .then(function(response){
          if(response !== null){
            console.log("enviado com sucesso");  
            console.log(response);           
          }
        })
        .catch(function(error){
            console.log("erro");
        });*/


   
    }
    else{
     
      alert( "Os campos devem ser preenchidos" );
     
    }
}

