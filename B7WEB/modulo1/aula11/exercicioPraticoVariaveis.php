<?php

    function linha()
    {
        echo '<br><br>';
    }

    function qualificacao()
    {
        $listas = [
            'nome' => 'Werike',
            'idade' => 25,
            'atributos' => [
                'força' => 70,
                'agilidade' => 40,
                'destreza' => 30,
                'vida' => 1000,
                'mana' => 928,
            ]
        ];

        return $dados = "NOME: ".$listas['nome']."<br>"."VIDA: ".$listas['atributos']['vida']."<br>"."FORÇA: ".$listas['atributos']['força']."<br>";

    }

?>