<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
    margin: 0 auto;
    background-image: url("./img/Credelec1.jpg");
    background-repeat: no-repeat;
    background-size: auto;
    
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
.nu{
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
h2{
    padding: 1px;
    border: 11px ;
    border-style:outset;
    border-color: lightblue;
    background:white;

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
.menu img{
    height: 110px;
    width: 475px;
    /*margin: 30px;*/
    text-align: centetr;
    border: 1px solid;
    border-radius: 5px;
    border-color: blue;
}
    
    </style>
</head>

<body>

    <div class="menu">
        <h2>  <img src="./img/Credelec3.jpg" alt=""></h2>
      <form action="Cred.php" method="POST">
        <div class="nu">
            <input type="text" name="numeroCOntador" id="" placeholder="Introduza o numero do Contador">
        
        </div>
        <div class="nu">
            <input type="text" name="Valor" id="" placeholder="Introduza o valor que deseja comprar">
        
        </div>
        <div class="nu">
            <button type="submit" id="ok">confirmar</button>
        </div>
	</form>
    </div>
</body>
</html>