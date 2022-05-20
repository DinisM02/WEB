<?php
//conexão
require_once 'db_connect.php';

// session
session_start();

$id = $_SESSION['id_usuario'];
$sql= "select * FROM transacoes";
$resultado= mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
$idConta = $dados['idConta'];
$sql = "Select saldo FROM conta WHERE id = $idConta";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
$ContATM = $dados['saldo'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>GFG</title>
  
<style>
             body{
    margin: 0 auto;
    background-image: url("./img/Credelec1.jpg");
    background-repeat: no-repeat;
    background-size: auto;

    
}
h1{
    padding: 1px;
    border: 11px ;
    border-style:outset;
    border-color: lightblue;
    background:white;
    text-align: center;

}
        
        .menu{
    width: 500px;
    height: 450px;
    text-align: center;
    margin: 0 auto;
    background-color: rgba(44, 62, 80, 0.7);
    border-radius: 10px;
    margin: 0 auto;
    margin-top: 160px;
}
.nu {
    color: #fff;
    background-color: rgba(44, 62, 80, 0.12);
    width: 450px;
    padding: 10px 5px;
    border: 0px solid #234966;
    text-align: center;
    padding:12px;
    margin: 0 auto;
    border-radius: 4px;
    
}
input{
    width: 250px;
    height: 15px;
    padding: 10px 5px;
    border: 4px solid #234966;
    text-align: center;
    padding:12px;
    color: black;
    border-radius: 20px;

}
button{
    color: black;
    width: 130px;
    padding: 10px 5px;
    border: 4px solid #234966;
    text-align: center;
    padding:12px;
    border-radius: 20px;
}
#ok:hover{
    background-color: #008CBA;
    color: white;
}

</style>
</head>
 
<body>
<?php

?>


<div class="menu">

<h1>Recargas</h1>
        <div class="nu">
            
                        <ol>
                            <li>20</li>
                            <li>50</li>
                            <li>100</li>
                            <li>200</li>
                            <li>500</li>
                            <li>1000</li>
                        </ol>
                    
        </div>
       

    
    <form method="post">
        <div class="nu">
        <input type="text" name="option" placeholder="introduz opcão de 1-6" id=""> 
        </div>     
        
        <div class="nu">
            <button type="submit" name="submit" id="ok">Comprar</button>
        </div>
        
      
                    
        
</form>
    
</div>    

            
 
<?php
 
// Checking submit condition
if(isset($_POST['submit'])) {
 
    $data = Getdate();
    // Taking option from the form
    // data to a variable 'ch'
    $ch = $_POST['option'];
 
    switch($ch) {
        case 1:
            
            if($ContATM>=20){
            
            @$sql = "INSERT INTO transacoes (TraData,idConta, TraDinheiro, Credelec, Credito)
            VALUES ('$data', '$id', 'NULL','NULL','20')";
            if(mysqli_query($connect, $sql)){
            echo "";
            }else{
            echo "operation failed";
            }
        }

            $sql= "select * FROM transacoes where idConta = $id";
            $resultado= mysqli_query($connect, $sql);
            $dados = mysqli_fetch_array($resultado);
            $TraDin =$dados['Credito'];
     

            if($ContATM>= $TraDin){
            $sql = "update conta set saldo = saldo - '$TraDin'-10 where id=$id";
            $resultado = mysqli_query($connect, $sql);
            echo "Compra feita com sucesso";
            echo "<br>";
            echo "O codigo da recarga é: ". "<br>";
            echo "78906435679";
            echo "O teu novo saldo é: $ContATM";

            }else{
            echo "O teu Saldo é insuficiente!";

            } 
            
            
        break; 
        case 2:
        
            if($ContATM>=50){

            $valor=50;
            @$sql = "INSERT INTO transacoes (TraData,idConta, TraDinheiro, Credelec, Credito)
            VALUES ('$data', '$id', 'NULL','','$valor')";
            if(mysqli_query($connect, $sql)){
            echo "";
            }else{
            echo "operation failed";
            }
        }    

            $sql= "select * FROM transacoes where idConta = $id";
            $resultado= mysqli_query($connect, $sql);
            $dados = mysqli_fetch_array($resultado);
            $TraDin =$dados['Credito'];
     

            if($ContATM>= $TraDin){
            $sql = "update conta set saldo = saldo - '$TraDin'-10 where id=$id";
            $resultado = mysqli_query($connect, $sql);
            echo "Compra feita com sucesso";
            echo "<br>";
            echo "O codigo da recarga é: ". "<br>";
            echo "78906435679";
            echo "O teu novo saldo é: $ContATM";
            }else{
            echo "O teu Saldo é insuficiente!";
        
            }
             
        break; 
        case 3:
                
                if($ContATM>=100){
                $valor=100;
                @$sql = "INSERT INTO transacoes (TraData,idConta, TraDinheiro, Credelec, Credito)
                VALUES ('$data', '$id', 'NULL','','$valor')";
                if(mysqli_query($connect, $sql)){
                echo "";
                 }else{
                    echo "operation failed";
                 }
                }
            
                 $sql= "select * FROM transacoes where idConta = $id";
                 $resultado= mysqli_query($connect, $sql);
                 $dados = mysqli_fetch_array($resultado);
                 $TraDin =$dados['Credito'];
                 
            
                if($ContATM>= $TraDin){
                $sql = "update conta set saldo = saldo - '$TraDin'-10 where id=$id";
                $resultado = mysqli_query($connect, $sql);
                echo "Compra feita com sucesso";
                echo "<br>";
                echo "O codigo da recarga é: ". "<br>";
                echo "78906435679";
                echo "O teu novo saldo é: $ContATM";
                } else{
                    echo "O teu Saldo é insuficiente!";
                    
                    } 
                
        break; 
        case 4:
                
                if($ContATM>=200){
                $valor=200;
                @$sql = "INSERT INTO transacoes (TraData,idConta, TraDinheiro, Credelec, Credito)
                VALUES ('$data', '$id', 'NULL','','$valor')";
                if(mysqli_query($connect, $sql)){
                echo "";
                }else{
                 echo "operation failed";
                }
            }

                $sql= "select * FROM transacoes where idConta = $id";
                $resultado= mysqli_query($connect, $sql);
                $dados = mysqli_fetch_array($resultado);
                $TraDin =$dados['Credito'];
     

                if($ContATM>= $TraDin){
                $sql = "update conta set saldo = saldo - '$TraDin'-10 where id=$id";
                $resultado = mysqli_query($connect, $sql);
                echo "Compra feita com sucesso";
                echo "<br>";
                echo "O codigo da recarga é: ". "<br>";
                echo "78906435679";
                echo "O teu novo saldo é: $ContATM";
                }
            
        break; 
        case 5:
                if($ContATM>=500){
                @$valor=500;
                $sql = "INSERT INTO transacoes (TraData,idConta, TraDinheiro, Credelec, Credito)
                VALUES ('$data', '$id', 'NULL','','$valor')";
                if(mysqli_query($connect, $sql)){
                echo "";
                }else{
                echo "operation failed";
                }
            }
    
                $sql= "select * FROM transacoes where idConta = $id";
                $resultado= mysqli_query($connect, $sql);
                $dados = mysqli_fetch_array($resultado);
                $TraDin =$dados['Credito'];
         
    
                if($ContATM>= $TraDin){
                $sql = "update conta set saldo = saldo - '$TraDin'-10 where id=$id";
                $resultado = mysqli_query($connect, $sql);
                echo "Compra feita com sucesso";
                echo "<br>";
                echo "O codigo da recarga é: ". "<br>";
                echo "78906435679";
                echo "O teu novo saldo é: $ContATM";
                }else{
                echo "O teu Saldo é insuficiente!";
            
             } 
              
                
        break; 
        case 6:
               
                if($ContATM>=1000){
                    $valor=1000;
                    @$sql = "INSERT INTO transacoes (TraData,idConta, TraDinheiro, Credelec, Credito)
                    VALUES ('$data', '$id', 'NULL','','$valor')";
                    if(mysqli_query($connect, $sql)){
                    echo "";
                 }else{
                    echo "operation failed";
                 }
                }
            
                 $sql= "select * FROM transacoes where idConta = $id";
                 $resultado= mysqli_query($connect, $sql);
                 $dados = mysqli_fetch_array($resultado);
                 $TraDin =$dados['Credito'];
                 
            
                if($ContATM>= $TraDin){
                $sql = "update conta set saldo = saldo - '$TraDin'-10 where id=$id";
                $resultado = mysqli_query($connect, $sql);
                echo "Compra feita com sucesso";
                echo "<br>";
                echo "O codigo da recarga é: ". "<br>";
                echo "78906435679";
                echo "O teu novo saldo é: $ContATM";
                }else{
                    echo "O teu Saldo é insuficiente!";
                    
                }
             
        break; 
        default:
            echo ("invalid option\n");
            
        
    
            } 
    return 0;
}
?>
</body>
</html>