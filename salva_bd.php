<?php

include 'conecta_BD.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$filename = $_FILES['arquivo']['name'];
$arquivo = $_FILES['arquivo']['tmp_name'];

$destino = 'uploads/'.$filename;

//echo "recebi ".$nome;


$SQL = "SELECT * FROM `contatos`";
    $dados = mysqli_query($mysqli,$SQL);
    if($dados == false){
    	die('erro');
    }
   // else die('sql ok');
    move_uploaded_file($arquivo,$destino);
    $SQL = "INSERT INTO `contatos` (`nome`, `email`, `telefone`, `arquivo`) VALUES ('{$nome}','{$email}','{$telefone}','{$filename}')";
    
    if (mysqli_query($mysqli,$SQL)=== true) {
        //die('Cadastrado');
        header("location: http://engenergy.com.br/");
    } 
    else{					
         echo mysqli_errno($mysqli);
    }





         
?>