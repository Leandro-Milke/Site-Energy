<?php

include 'conecta_BD.php';

$nome = filter_input(INPUT_POST, 'nome', filter_sanitize_special_chars);

//echo "recebi ".$nome;


$SQL = "SELECT * FROM `contatos`";
    $dados = mysqli_query($mysqli,$SQL);
    if($dados == false){
    	die('erro');
    }
    else die('sql ok');
    
    // inserir dados
    //$nome = "Leandro_Milke";
    $email = "ro@hotmail";
    $telefone = "112233";
    $arquivo = "testeaaa";
    $SQL = "INSERT INTO `contatos` (`nome`, `email`, `telefone`) VALUES ('{$nome}','{$email}','{$telefone}')";
    
    if (mysqli_query($mysqli,$SQL)=== true) {
        die('Cadastrado');
        
        } 
     else{					
         echo mysqli_errno($mysqli);
         }
?>