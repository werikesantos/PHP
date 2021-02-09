<?php

    include_once '../../../B7WEB/menu.html';
    include_once '../../../B7WEB/home.html';

    include_once "mesclandoVariaveis.php";

    $nome = 'Werike';
    $sobrenome = 'Santos';
    $idade = 25;

    //EXEMPLO DE CONCATENAÇÃO 1 
    exemploUm($nome, $sobrenome); 

    linha();

    //EXEMPLO DE CONCATENAÇÃO 2
    echo exemploDois($nome, $sobrenome); 

    linha();

    //EXEMPLO DE CONCATENAÇÃO 3
    echo exemploTres($nome, $sobrenome);

    linha();

    //EXEMPLO DE CONCATENAÇÃO 4
    echo exemploQuatro($nome, $sobrenome, $idade);

    linha();

    //EXEMPLO DE CONCATENAÇÃO 5
    echo exemploCinco($nome, $sobrenome);

    linha();

    //EXEMPLO DE CONCATENAÇÃO 6
    echo exemploSeis();

    
    include_once '../../../B7WEB/footer.html';

?>