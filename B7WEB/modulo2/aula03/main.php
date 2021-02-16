<?php

    include_once '../../../B7WEB/menu.html';
    include_once '../../../B7WEB/home.html';

    include_once "condicionalNULLCAO.php";

    echo ternarioSimplificado1();

    linha();

    echo ternarioSimplificado2();

    linha();

    //NESTE EXEMPLO ESTOU CRIANDO UM NOME E ENVIANDO A VARIÁVEL PARA SER PROCESSADA NO MÉTODO 'ternarioSimplificado3($nome)' 
    //E DEPOIS RETORNARA UM DADO
    $nome = 'Werike';
    echo ternarioSimplificado3($nome);


    include_once '../../../B7WEB/footer.html';
    
?>