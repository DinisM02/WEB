<?php
//conexão
require_once 'db_connect.php';

// session
session_start();
if(isset($_POST['btn-login'])):

  $saldo = mysqli_escape_string($connect, $_POST['valorLeva']);

endif;
if(empty($conta) or empty($senha)):
  $erros[] = "<li> O campo numero da conta/senha precisa ser preenchido </li>";
else:



// verificação
if(!isset($_SESSION['logado'])):
    header('location: login.php');
endif;

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM login INNER JOIN servicos ON login.id = servicos.id WHERE servicos.id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
$saldo =$dados['Saldo'];

?>

<?php


$valorCredCp=$_POST['valorLeva'];
if($saldo>=$valorCredCp){
  $sql = "update servicos set Saldo = Saldo - '$valorCredCP' -10 Where id = '$id'";
  $resultado = mysqli_query($connect, $sql);
 echo "Transação feita com sucesso";
echo "<br>";
echo "o teu novo saldo é: $saldoActual";
}
else{
echo "O teu saldo é insuficiente";
}
?>