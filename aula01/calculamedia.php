<?php

 $nota1 = 4;

 $nota2 = 6;

 $nota3= 9;

    $media=($nota1+$nota2+$nota3)/3;

    if ($media >=7) {
        echo "Nota: $nota1 <br> Nota: $nota2 <br> Nota: $nota3 <br>";
        echo "Aprovado! Média: $media";
    }else{
        echo "Nota: $nota1 <br> Nota: $nota2 <br> Nota: $nota3 <br>";

        echo "Não Aprovado! Média: $media";
    }


?>