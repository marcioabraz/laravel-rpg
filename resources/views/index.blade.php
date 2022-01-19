<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        body{
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .container{
            display: flex;
        }
        .container a div{
            width: 200px;
            height:200px;
             background-color: #aaa; 
            margin = 10px;
        }
        .container a div img {
            width: 160px;
        }
    </style>
</head>
<body>
    <h1>Escolha uma classe:</h1>
    <div class="container">
        <a href="/classes/guerreiro"><div><img src="https://static3.tcdn.com.br/img/img_prod/460977/pre_venda_boneco_thanos_vingadores_ultimato_avengers_endgame_mms529_escala_1_6_hot_toys_42290_1_20201211183746.png">Guerreiro</div></a>
        <a href="/classes/Arqueiro"><div> <img src="https://www.seekpng.com/png/full/484-4849646_hawkeye-os-vingadores-personagens-arqueiro.png">Arqueiro</div></a>
        <a href="/classes/Mago"><div><img src="https://i.pinimg.com/originals/d6/29/c7/d629c71c48a740ad47e2323ae8cefa30.png">Mago</div></a>
    </div>
</body>
</html>