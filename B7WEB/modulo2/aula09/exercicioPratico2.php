<?php

    function linha(){
        echo "<br>";
    }  

    //FAÇA 20 TRAÇOS EM ORDEM CRESCENTE EM CADA LINHA
    //USAR SOMENTE 1X O ECHO E 1X O TRAÇO '-'.
    function exercicio2(){
        $result = "";
        for ($i=0; $i < 20; $i++) { 
            $traco = '-';
            $result = $result."".$traco;
            echo $result."<br>";
        }
    }  

?>