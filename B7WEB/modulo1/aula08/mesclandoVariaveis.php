<?php

    function linha()
    {
        echo '<br><br>';
    }

    function exemploUm($nome, $sobrenome)
    {
        echo "<strong> EXEMPLO SEM ESPAÇO ENTRE AS VARÁVEIS:</strong><br><br>";
        $nomeCompleto = $nome.$sobrenome; //PARA JUNTAR UMA VARIÁVEL A OUTRA, BASTA UTILIZAR O "."

        echo $nomeCompleto;
    }

    function exemploDois($nome, $sobrenome)
    {
        echo "<strong>EXEMPLO COM ESPAÇO ENTRE AS VARÁVEIS:</strong><br><br>";
        $nomeCompleto = $nome.' '.$sobrenome; //PARA JUNTAR UMA VARIÁVEL A OUTRA, BASTA UTILIZAR O "."

        echo $nomeCompleto;
    }

    function exemploTres($nome, $sobrenome)
    {
        echo "<strong>OUTRA FORMA DE COLOCAR UM ESPAÇO:</strong><br><br>";
        $nomeCompleto = "$nome $sobrenome"; 

        echo $nomeCompleto;
    }

    function exemploQuatro($nome, $sobrenome, $idade)
    {
        echo "<strong>FRASE:</strong><br><br>";
        $idade = 25;
    
        $nomeCompleto = "$nome $sobrenome tem $idade anos de idade.";

        echo $nomeCompleto;
    }

    function exemploCinco($nome, $sobrenome)
    {
        echo "<strong>OUTRA FORMA DE CONCATENAR - 01:</strong><br><br>";
        $nome = 'Werike ';
        $sobrenome = 'Santos';
        $nomeCompleto = $nome;
        $nomeCompleto .= $sobrenome; //".=" -> INDICA QUE A VARIÁVEL JÁ TINHA UM VALOR E AGORA ELE CONCATENA COM OUTRA.

        echo $nomeCompleto;
    }

    function exemploSeis()
    {
        echo "<strong>OUTRA FORMA DE CONCATENAR - 02:</strong><br><br>";
        $texto2 = 'texto 2';
        $frase = 'texto 1 '.$texto2;

        return $frase;
    }
    
?>