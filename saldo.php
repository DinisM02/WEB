<?php
//conexão
require_once 'db_connect.php';

// session
session_start();


$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM login INNER JOIN servicos ON login.id = servicos.id WHERE servicos.id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
$saldo =$dados['Saldo'];

echo $saldo;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            border: 1px solid black;
            max-width: 200px;
            margin: 0;
            display: flex;
            height:100px;
            justify-content: center;
        }
        .item{
            padding: 5px;
            margin: 10px;
            background-color: gray;
            flex-direction: row;
            width:100%;
            height: 50%;
        }
    </style>
</head>
<body>
    <div class = "container">
        <p class = "item" >
            <?php
                echo $saldo;
            ?>
        </p>


    </div>
</body>
</html>