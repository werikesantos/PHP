<?php

    include_once '../../../B7WEB/menu.html';
    include_once '../../../B7WEB/home.html';

    include_once "tiposVariaveis.php";

    //CLASSE DE EXECUÇÃO

    //CHAMANDO OS MÉTODOS DAS OUTRAS CLASSES
    explicar();

    //NESTE CASO, O RETORNO DO VALOR DO MÉTODO SERÁ ATRIBUÍDO A UMA VARIÁVEL LOCAL.
    $x = valorCampo();

    //SABENDO O VALOR DA VARIÁVEL LOCAL, O MESMO SERÁ ENVIADO PARA OUTROS MÉTODOS 
    //ONDE RECEBERÁ UM TRATAMENTO DIFERENCIADO EM CADA MÉTODO.
    somar($x);
    subtrair($x);
    multiplicar($x);
    divisao($x);
    
    include_once '../../../B7WEB/footer.html';
    
?>