<?php
// conexão com base de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "gestao_atm";

$connect = mysqli_connect($servername, $username, $password, $db_name);
if(mysqli_connect_error()):
    echo "falhas na conexão: ".mysqli_connect_error();
endif;
