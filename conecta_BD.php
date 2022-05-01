<?php
//Conexão com o banco de dados

    $mysqli = new mysqli('energy_orc.mysql.dbaas.com.br', 'energy_orc', 'Phe64re1', 'energy_orc');
	if ($mysqli->connect_error) {
       die('Erro de conexão!!!!: (' . $mysqli->connect_errno . ')');
    }
   else echo "Conectado";

?>