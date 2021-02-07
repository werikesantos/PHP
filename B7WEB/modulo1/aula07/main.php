<?php

    include_once '../../../B7WEB/menu.html';
    include_once '../../../B7WEB/home.html';

    include_once "tiposVariaveis.php";

    //CLASSE DE EXECUÇÃO
    explicar();
    $x = valorCampo();
    somar($x);
    subtrair($x);
    multiplicar($x);
    divisao($x);
    
    include_once '../../../B7WEB/footer.html';
    
?>