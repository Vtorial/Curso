<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoção</title>

    <style>
        body{
            background-color: 	#DCDCDC;
        }
        .perguntas1{
            text-align: center;
            font-size: 20px;
        }
        .perguntas2{
            text-align: center;
            font-size: 20px;
        }
        .bolodechocolate{
            text-align: center;
            font-size: 20px;
        }
        .brincar{
            width: 500px;
            height: 400px;
            border: 5px solid black;
        }
        .patas{
            width: 500px;
            height: 400px;
            border: 5px solid black;
        }
        .pao{
            width: 500px;
            height: 400px;
            border: 5px solid black;
        }
    </style>

</head>
<body>
    <div class="bolodechocolate">
    <h1>Bem vindo a página de adoção!</h1>
    <h2>Aqui você pode adotar quantos gatinhos você quiser, <br>
    dos mais animados aos mais calmos!</h2>
    <img src="img/brincadeiras.jpg" alt="" class="brincar">
    <img src="img/patinha.webp" alt="" class="patas">
    <img src="img/paozin.jpg" alt="" class="pao">
    </div>

    <div class="perguntas1">
    <h2>Digite as seguintes instruções: </h2>
    <label> Digite seu nome: </label> <br>
    <input type= "string" name= "n1" id="n1"> <br>

    <label> Digite seu número para contato: </label> <br>
    <input type = "number" name = "n2" id="n2"><br>

    <label> Digite seu e-mail: </label> <br>
    <input type = "string" name = "n3" id = "n3"><br>

    <label> Digite uma nota de 0 a 6 sobre este site: </label> <br>
    <input type = "number" name = "n4" id = "n4"><br>
    </div>

    <div class="perguntas2">
    <h2>Estamos quase acabando, jajá você vai ter seu gatinho!</h2>
     <label> Digite seu endereço: </label> <br>
     <input type="string" name="Endereço"> <br>

     <label> Cidade: </label> <br>
     <input type="string" name="Cidade"><br>

     <label> País: </label> <br>
     <input type="string" name="País"><br>

     <a href="sucesso.php">Enviar</a>
     </div>


</body>
</html>