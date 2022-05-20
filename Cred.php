<?php
//conexão
require_once 'db_connect.php';

// session
session_start();


$id = $_SESSION['id_usuario'];
$sql= "select * FROM levantamento";
$resultado= mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
$idConta = $dados['idConta'];
$sql = "Select saldo FROM conta WHERE id = $idConta";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
$ContATM = $dados['saldo'];

?>



<?php
/*
$valor = @$_POST['Valor'];
if($saldo>=$valor){
  $sql = "update servicos set Saldo = Saldo - '$valor' -10 Where id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  echo "Compra feita com sucesso";
  echo "<br>";
  echo "o teu novo saldo é: $saldo";
}
else{
   echo "O teu saldo é insuficiente";
}*/

  $valor = $_POST['Valor'];
  $data =date('d-m-y h:i:s');;

if($valor>=20){
  @$sql = "INSERT INTO levantamento( valor_levantado, data_levantamento, idConta)
     VALUES ('$data', '$id', 'NULL','$valor')";
     if(mysqli_query($connect, $sql)){
        echo "";
        die();
     }else{
        echo "operation failed";
     }
    }

     $sql= "select * FROM levantamento where idConta = $id";
     $resultado= mysqli_query($connect, $sql);
     $dados = mysqli_fetch_array($resultado);
     $TraDin =$dados['valor_levantado'];
     

if($ContATM>= $TraDin){
$sql = "update conta set saldo = saldo - '$TraDin'-10 where id=$id";
$resultado = mysqli_query($connect, $sql);
echo "Compra feita com sucesso";
echo "<br>";
echo "O teu novo saldo é: $ContATM";

}else{
echo "O teu Saldo é insuficiente!";

}

?>

