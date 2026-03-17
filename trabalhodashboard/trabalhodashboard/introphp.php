<?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $m = ($n1 + $n2)/2;
    echo "Sua média é: $m";
    if ($m<7){
        echo "Reprovado";
    }else{
        echo "Aprovado";
    }
    ?>