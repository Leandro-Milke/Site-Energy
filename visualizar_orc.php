<?php
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>Energy - Energia Fotovoltaica</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" type="text/css" href="./styles/styles_listaOrc.css" />
</head>
<body>

    <div>
        <h1>LISTA DE SOLICITAÇOES DE ORÇAMENTOS</h1>
    </div>

    <div class="lista-orc">
    <?php
        include 'conecta_BD.php';
        $SQL = "SELECT * FROM `contatos`";
        $dados = mysqli_query($mysqli,$SQL);
        if($dados == false){
            echo "erro";
        }
        else echo "sql ok ";

        echo "<br>";

        while ($resultado = mysqli_fetch_assoc($dados)){ 
     
                echo $resultado['nome'];
                echo " - ";
                echo $resultado['email'];
                echo " - ";
                echo $resultado['telefone'];
                if($resultado['arquivo']!=null){
                // echo '<a href="ver_imagem.php?id='.$resultado['id'].'"> - Imagem</a>';
                  // echo '<a Download="', $resultado['arquivo'],'"href= ./uploads/"',$resultado['arquivo'],'"
                  // > - Imagem</a>';
                  echo '<a href="uploads/'.$resultado['arquivo'].'" download> - Imagem</a>';
                  echo $resultado['arquivo'];
                };
                echo "<br>";
        

        } 
    ?>
    </div>

    
</body>
</html>