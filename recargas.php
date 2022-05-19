<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Helvetica;
        }
        header{
            background-color: #3db36b;
            color: #fff;
            padding: 15px;
            text-align: center;
            border-bottom: 3px solid #0f642f;
        
        }
        .container{
            background-color: #EEE;
            min: height 40v;
            padding: 50px;
        }
        .Operadoras-container{
            max-width: 1200px;
            margin: 0 auto;
        }
        footer{
            background-color: #3db36b;
            color: #fff;
            border-top: 3px solid #0f642f;
            text-align: center;
            padding: 80px; 
        }
        .redes{
            width: 31%;
            display: inline-block;
            margin: 1% 1%;
            padding: 15px;
        }
        .operadora-image{
            height: 300px;
            width: 100%;
            margin-bottom: 10px;
            background-position: center;
            background-size: cover;
            border-radius: 50px;
        }
        #img-1{
            background-image: url('./img/vodacom.jpg')
        }
        #img-2{
            background-image: url('./img/movitel.jpg')
        }
        #img-3{
            background-image: url('./img/mcel.jpg')

        }
        h3{
            margin-bottom: 10px;
            color: #3db36b;
            border-left: 5px solid #0f642f;
            padding-left: 7px;
            font-size: 24px;
        }
        .redes p{
            margin-bottom;10px;
        }
        .bold{
            font-weight: bold;
        }
        .btn{
            display: block;
            width: 100%;
            text-transform: uppercase;
            text-decoration: none;
            background-color: #3db36b;
            color: #fff;
            padding: 15px;
            border-radius: 5px;
            transition: 0.5s;
            text-align: center;
        }
        .btn:hover{
            background-color: #0f642f;
        }
    </style>
</head>
<body>
    <header>
        <h1>Compre a sua recarga de forma segura</h1>
    </header>

    <main class="container">
        <section class="Operadoras-container">
            <div class="redes">
                <div class="operadora-image" id="img-1"></div>
                <h3>Vodacom</h3>
                <p>recarregue a sua conta e fale com a tua turma. Tudo bom pra ti!</p>
                <a href="switch.php" class="btn">Comprar</a>
            </div>
            <div class="redes">
                <div class="operadora-image" id="img-2"></div>
                <h3>Movitel</h3>
                <p>recarregue a sua conta a todo em todo lugar a todo momento</p>
                <a href="switch.php" class="btn">Comprar</a>
            </div>
            <div class="redes">
                <div class="operadora-image" id="img-3"></div>
                <h3>Tmcel</h3>
                <p>recarregue a sua conta e sorria com a malta. Tmcel Giro</p>
                <a href="switch.php" class="btn">Comprar</a>
            </div>

        </section>
</main>
<footer>
    <p><span class="bold">Dinis Matavele</span>
    &copy; 2022</p>
</footer>
</body>
</html>