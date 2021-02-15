<?php

    function linha(){
        echo "<br>";
    }    

    //ESSA É A ESTRUTURA BÁSICA DE UM CONDICIONAL IF
    function ifBasico(){
        echo "<h4>Estrutura condicional IF:</h4>";
        $idade = 18;
        if ($idade < 18) {
            echo 'Menor de idade';
        }else {
            echo 'Maior de idade';
        }  
    }  
   
    //ESSA É A ESTRUTURA DE UM CONDICIONAL TERNARIO
    function ifTernario1(){
        echo "<h4>Estrutura condicional IF Ternário A:</h4>";
        $idade = 18;
        //A DIFERENÇA DO COMUM É A SUA SIMPLICIDADE 
        echo ($idade < 18) ? 'Menor de idade' : 'Maior de idade'; 
        //'($idade < 18)' => SE ESSA CONDIÇÃO FOR VERDADEIRA EXECUTA A PRIMEIRA OPÇÃO APÓS A '?'
        //':' => SERVE PARA SEPARA AS DUAS OPÇÕES
        //SE A CONDIÇÃO FOR VERDADEIRA EXECUTA A PRIMEIRA OPÇÃO E SENDO FALSE A SEGUNDA OPÇÃO.
    } 

    //SEGUE O MESMO MODELO A DIFEREÇA É QUE O RESULTADO PODE SER GUARDADO DENTRO DE UMA VARIÁVEL
    function ifTernario2(){
        echo "<h4>Estrutura condicional IF Ternário B:</h4>";
        $idade = 18;
        $resultado = ($idade < 18) ? 'Menor de idade' : 'Maior de idade';
        echo $resultado;  
    } 

    //NESTE EXEMPLO NÃO É POSSÍVEL IMPRIMIR O RESULTADO SE É 'true OU false'.
    //PARA RESOLVER ISSO, BASTA CRIAR UM IF E SUBSTITUIR O RESULTADO DE TRUE PARA MAIOR...
    function ifTernarioBoolean(){
        echo "<h4>Estrutura condicional IF Ternário C:</h4>";
        $idade = 18;
        $menorIdade = ($idade < 18) ? true : false ;
        if ($menorIdade) {
            echo 'MENOR';
        }else {
            echo 'MAIOR';
        }
    } 

?>