<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa</title>
</head>
<body>
    <?php 

        $nome= $_POST['nome'];
        $email=$_POST['email'];
        $idade=$_POST['idade'];

// echo $nome .  $email . $idade;

        $anoatual= date('Y');


    ?>

    <p>O nome é: <?php echo $nome ?></p>
    <p>O email é: <?php echo $email ?></p>
    <p>O idade é: <?php echo $idade ?></p>
    <p>Seu ano de nascimento é: <?php $nasc=$anoatual-$idade; echo $nasc; ?></p>

    <?php

        if ($idade>=18) {
            echo "<p style='color:red' >Você é maior de idade</p>";
        }else{
            echo "<p style='color:blue' >Você é menor de idade</p>";

        }


        echo "<h1>Lista de clientes</h1>";
        echo "<ul>";

        for ($i=1; $i <= 3; $i++) { 
            echo " <li>Cliente $i </li>";
        }

        echo "</ul>"

    ?>

<!-- <h1>Lista de clientes</h1>

    <ul>
        <li>Cliente 1</li>
        <li>Cliente 2</li>
        <li>Cliente 3</li>
    </ul>

</body>
</html> -->