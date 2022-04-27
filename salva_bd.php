<?php

include 'conecta_BD.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$arquivo = $_FILES['arquivo']['tmp_name'];


//echo "recebi ".$nome;


$SQL = "SELECT * FROM `contatos`";
    $dados = mysqli_query($mysqli,$SQL);
    if($dados == false){
    	die('erro');
    }
   // else die('sql ok');
    
    $SQL = "INSERT INTO `contatos` (`nome`, `email`, `telefone`, `arquivo`) VALUES ('{$nome}','{$email}','{$telefone}','{$arquivo}')";
    
    if (mysqli_query($mysqli,$SQL)=== true) {
        die('Cadastrado');
        
        } 
     else{					
         echo mysqli_errno($mysqli);
         }
?>