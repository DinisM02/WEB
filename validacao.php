<?php

$numero_conta = 1251245162;
$pin = 5261;


    
    $count=0;
for($i =0; $i<3; $i++){
    $account = $_POST['numero_conta'];
    $senha= $_POST['password'];

if ($numero_conta == $account){
    if($pin == $senha) {
    // do something here
    header('location:opcoes.php');
        echo "entrou";
        echo "<br>";
        $count++;
    
    }

    else{

        echo "pin incorrecto";
	header('location:login.php');
        echo "<br>";
        $count++;
	break;

    }
}else {
   echo "O numero nao existe";
     //caso a senha esteja errada....
     $count++;
	break;
//}
      
    
}
}

    if($count>2):
        echo "A sua conta foi bloqueada, contancte o seu banco ou digite";
    endif;
    if($numero_conta==$account && $pin==$senha):
    header('location:opcoes.php');
    endif;


?>