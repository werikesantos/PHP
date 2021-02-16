<?php

    function linha(){
        echo "<br><br>";
    }    

    //É UMA SIMPLIFICAÇÃO DO OPERADOR TERNÁRIO
    function ternarioSimplificado1(){
        echo "<h4>Nome cadastrado:</h4>";
        $nome = 'Werike';
        $nomeCompleto = $nome;
        /* VEJA QUE A VARIÁVEL '$sobrenome' NÃO TEM UM DADO ATRIBUÍDA A ELA E VAI DAR ERRO POIS NÃO TEM NADA PARA CONCATENAR(JUNTAR)
         * PARA RESOLVER FOI CRIADO UM CONDICIONAL TERNARIO SIMPLIFICADO
         * ($sobrenome ?? '') => '??' => ISSO QUER DIZER QUE SE TIVER DADO, REPITA NOVAMENTE '?(SEGUNDA INTERROGAÇÃO QUE REPRESENTA A VARIÁVEL)'
         * OU IMPRIMA O RESULTADO NEGATIVO QUE NO CASO É UM CAMPO VAZIO '' 
        */
        $nomeCompleto .= $sobrenome ?? '';
        echo $nomeCompleto;
    }

    function ternarioSimplificado2(){
        echo "<h4>Sem cadastro:</h4>";
        /* VEJA QUE A VARIÁVEL '$sobrenome' NÃO TEM UM DADO ATRIBUÍDA A ELA E VAI DAR ERRO POIS NÃO TEM NADA PARA CONCATENAR(JUNTAR)
         * PARA RESOLVER FOI CRIADO UM CONDICIONAL TERNARIO SIMPLIFICADO
         * ($sobrenome ?? '') => '??' => ISSO QUER DIZER QUE SE TIVER DADO, REPITA NOVAMENTE '?(SEGUNDA INTERROGAÇÃO QUE REPRESENTA A VARIÁVEL)'
         * OU IMPRIMA O RESULTADO NEGATIVO QUE NO CASO É UM CAMPO VAZIO '' 
        */
        $nomeCompleto = $nome ?? 'Visitante';
        $nomeCompleto .= $sobrenome ?? '';

        echo $nomeCompleto;
    }

    function ternarioSimplificado3($nome){
        echo "<h4>Sem cadastro:</h4>";
        /* VEJA QUE A VARIÁVEL '$sobrenome' NÃO TEM UM DADO ATRIBUÍDA A ELA E VAI DAR ERRO POIS NÃO TEM NADA PARA CONCATENAR(JUNTAR)
         * PARA RESOLVER FOI CRIADO UM CONDICIONAL TERNARIO SIMPLIFICADO
         * ($sobrenome ?? '') => '??' => ISSO QUER DIZER QUE SE TIVER DADO, REPITA NOVAMENTE '?(SEGUNDA INTERROGAÇÃO QUE REPRESENTA A VARIÁVEL)'
         * OU IMPRIMA O RESULTADO NEGATIVO QUE NO CASO É UM CAMPO VAZIO '' 
        */
        $nomeCompleto = $nome ?? 'Visitante';
        $nomeCompleto .= $sobrenome ?? '';

        return $nomeCompleto;
    }


?>