<?php

    function linha(){
        echo "<br><br>";
    }   
    
    function estruturaWhile(){
        $numero = 0;
        while ($numero <= 10) {//ENQUANTO ZERO FOR MENOR OU IGUAL A 10 EXECUTE.
            echo "Número: ".$numero."<br/>";
            $numero += 1;//PARA NÃO ENTRAR EM UM LOOP INFINITO AQUI É ACRESCENTADO (+1) A VARIÁVEL.
        }
    } 


?>