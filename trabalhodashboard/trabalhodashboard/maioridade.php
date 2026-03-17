<?php
//pegar variavel na url
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    echo $nome ""
    if ($idade >= 18){
        echo "Maior de idade";
    }else{
        echo "Menor de idade";
    }
?>