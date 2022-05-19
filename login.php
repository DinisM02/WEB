<?php
date_default_timezone_set('Africa/Maputo');

// Conexão com base de dados
require_once 'db_connect.php';
// Sessão
session_start();

if($_SESSION['count']>=3){
    $_SESSION['blocked']= "A sua conta foi bloqueada po 3 horas. volte a tentar mais tarde!";
    if(!isset($_SESSION['start'])){
        $inicio = new DateTime();
        $_SESSION['start']= new DateTime();
        $_SESSION['end']= $inicio -> add(new DateInterval('PT10800S'));
    }else{
        $now = new DateTime();
        if($_SESSION['end']<=$now){
            $_SESSION['count']=0;
            unset($_SESSION['blocked']);
            unset($_SESSION['start']);
            unset($_SESSION['end']);
        }
    }
}
// botão enviar
$erros = array();
if(isset($_POST['btn-login']) && $_SESSION['count']<=3):

    $conta = mysqli_escape_string($connect, $_POST['numero_conta']);
    $senha = mysqli_escape_string($connect, $_POST['password']);
endif;
if(empty($conta) or empty($senha)):
    $erros[] = "<li> O campo numero da conta/senha precisa ser preenchido </li>";
else:
    $sql = "SELECT numero_conta FROM conta WHERE numero_conta ='$conta'";
    $resultado = mysqli_query($connect, $sql);
    if(mysqli_num_rows($resultado)>0):
        $senha = md5($senha);
        $sql ="SELECT * FROM conta WHERE numero_conta = '$conta' AND ATMPin = '$senha'";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) == 1):
            $dados = mysqli_fetch_array($resultado);
            $_SESSION['logado'] = true;
            $_SESSION['id_usuario'] =$dados['id'];
            header('Location: opcoes.php');
            exit();
        else:
            $erros[] = "<li> Usuário e senha não conferem </li>";
            $_SESSION['count']++;
        endif;
    else:
        $erros[] = "<li> Usuário inexistente </li>";
        $_SESSION['count']++;
    endif;
endif; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="conteiner">
        <img src="img/ATM5.jpg" alt="">
        <?php
        if(!empty($erros)):
            foreach($erros as $erro):
                echo $erro;
            endforeach;
        endif;
        ?>
    
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form_input">
                <input type="text" name="numero_conta" class="input_dados" id="" placeholder="Introduza o número da conta">
            </div>
            <div class="form_input">
                <input type="password" name="password" class="input_dados" id="" placeholder="Introduza o pin">
            </div>
            <input type="submit" value="Login" class="btn_login" name ="btn-login">
        </form>
    </div>
</body>
</html>