<?php

    function linha(){
        echo "<br><br>";
    }   
    
    function estruturaWhile(){
        echo "<h4>ESTRUTURA WHILE:</h4>";
        $numero = 0;
        while ($numero <= 10) {
            echo "Número: ".$numero."<br/>";
            $numero += 1;
        }
    } 

    function estruturaFor1(){
        echo "<h4>ESTRUTURA FOR A:</h4>";
        //'for' =>(PARA/DURANTE)
        for ($numero=0; $numero <= 10; $numero++) {
            //$numero=0; ÁREA DE CRIAÇÃO DA VARIÁVEL
            //$numero <= 10; ÁREA DE CONDIÇÃO DE PARADA/FINALIZAÇÃO DO LOOP
            //$numero++ ATRIBUINDO UM NOVO VALOR A VARIÁVEL
            echo "Número: ".$numero."<br/>";
        }
    }

    function estruturaFor2(){
        echo "<h4>ESTRUTURA FOR B:</h4>";
        
        for ($i=0; $i <= 10; $i++) {//GERALMENTE É CRIADO UMA VARIÁVEL COM A LETRA 'i' PARA PERCORRER UM LOOP FOR.
            echo "Número: ".$i."<br/>";
        }
    }

?>