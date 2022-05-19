<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opcções</title>
    <link rel="stylesheet" href="styleg.css">
    <style>
        body{
    margin: 0 auto;
    background-color: gray;
    background-image: url("./img/ATM3.jpg");
    background-repeat: no-repeat;
    background-size: 100% 720px;
    
}
        
        .menu{
    width: 500px;
    height: 450px;
    text-align: center;
    margin: 0 auto;
    background-color: rgba(44, 62, 80, 0.9);
    border-radius: 10px;
    margin: 0 auto;
    margin-top: 160px;
}
.links_opcoes{
    color: #fff;
    background-color: blue;
    width: 130px;
    padding: 10px 5px;
    border: 4px solid #234966;
    text-align: center;
    padding:12px;
}
.menu img{
    height: 300px;
    width: 225px;
    margin: 30px;
    text-align: centetr;
    
}
h2{
    padding: 2px;
    border: 10px ;
    border-style:outset;
    border-color: lightblue;
    background:white;
}
ol{
    border: 1px solid gray;
    background: lightblue;
}
 a{
    color: white;
    text-decoration: none;
}
button{
    background: rgba(44, 62, 80, 0.7);
    width:130px;
    color:white;
    border: 3px;
    border-style:outset;
}
    </style>

</head>
<body>
    <header>
    <a href="logout.php">Sair</a>
    </header>
    <div class="menu">
    
    <table>
        <tr>
            <h2>ESCOLHE A OPERAÇÃO QUE DESEJA</h2>
            <th>
                <ol>
                    <li>
                        <div class="links_opcoes">
                         <button><a href="levantamento.php">Lenvatamento</a></button>
                        </div>
                    </li>
                    <li>
                        <div class="links_opcoes">
                            <button><a href="recargas.php">Recargas</a></button>
                        </div>   
                    </li>
                    <li>
                        
                    <div class="links_opcoes">
                        <button><a href="Credel.php">Credelec</a></button>
                     </div>
                    </li>
                    <li>
                    <div class="links_opcoes">
                        <button><a href="saldo.php">Saldos</a></button>
                    </div>
                    </li>
                    <li>
                    <div class="links_opcoes">
                        <button><a href="#">Movimentos</a></button>
                    </div>
 
                    </li>
                </ol>
              
        
        
        
            </th>
            <th>
            <div><img src="./img/ATM5.jpg"></div>
    
            </th>
        </tr>
    </table>
    <div>
    

    </div>
        
    
        

    </div>    




</body>
</html>