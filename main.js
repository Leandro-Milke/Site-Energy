


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
btn.onclick = function(){

    // validar o valor, se foi digitada nova tarefa
    if(nome.value !=="" && email.value !=="" && telefone.value !==""){
    
      console.log(nome.value);
      console.log(email.value);
      console.log(telefone.value);

      let teste = nome.value;

      let ajax = new XMLHttpRequest();

      ajax.open('POST',`salva_bd.php`);

      ajax.setRequestHeader("content-type","application/x-www-form-urlencoded");

      ajax.send("nome="+teste);


  } else{
     
    alert( "Os campos devem ser preenchidos" );
     
  }
}

//function salvar_bd()
