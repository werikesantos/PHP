<?php

    function linha(){
        echo "<br>";
    }  

    //FAÇA 10 TRAÇOS NA HORIZONTAL, REPETINDO O PROCESSO EM 10 LINHAS.
    function exercicio1(){
        $result = "";
        for ($i=0; $i < 10; $i++) { 
            $traco = '-';
            echo $traco;
            $result = $result."".$traco; 
        }

        for ($i=1; $i < 10; $i++) { 
            echo "<br>".$result;
        }
    }  

?>