<?php

include 'conecta_BD.php';

$id_imagem = $_GET[id];

$SQL = "SELECT * FROM `contatos` WHERE id = $id_imagem";
    $dados = mysqli_query($mysqli,$SQL);
    if($dados == false){
        echo "erro na imagem";
    }
    else echo "imagem ok ";

    $imagem = mysqli_fetch_object($dados);
    $filepath = './uploads/'.$imagem;

    switch(strtolower(substr(strrchr(basename($dados),"."),1))){
        case "pdf": $tipo="application/pdf";break;
        case "jpge": $tipo="application/jpg";break;
        case "jpg": $tipo="application/jpg";break;
        case "doc": $tipo="application/msword";break;

    }

    header("Content-type: ".$tipo);

    header("Content-Length: ".filesize($dados));

    header("Content-Disposition: attachment; filename=".basename($dados));

    readfile($dados);

   // echo $imagem->imagem;

    exit();


?>