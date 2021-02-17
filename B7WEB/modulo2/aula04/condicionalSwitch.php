<?php

    function linha(){
        echo "<br><br>";
    }    

    function estruturaIF(){
    /* ESSE TIPO DE ESTRUTURA DO IF É MUITO REPETITIVA
     * SABENDO DISSO O IDEAL É UTILIZAR UM MÉTODO MAIS SIMPLIFICADO QUE É O CASO DO 'switch'.
     */
        $tipo = 'texto';
        if ($tipo == 'foto') {
            echo 'Exibindo uma foto';
        };
        if ($tipo == 'video') {
            echo 'Exibindo um video';
        };
        if ($tipo == 'texto') {
            echo 'Exibindo um texto';
        };
    } 
    
    function estruturaSwitch(){
        //ESSA É UMA FORMA MAIS SIMPLIFICADA DE UMA ESTRUTURA IF
        $tipo = 'fot';
        switch ($tipo) {//INTERROMPA A VARIÁVEL CASO...
            case 'foto':
                echo 'Exibindo uma foto';
                break;//PARE/FINALIZE
            case 'video':
                echo 'Exibindo um video';
                break;
            case 'texto':
                echo 'Exibindo um texto';
                break;
            default://PADRÃO
                echo 'Vazio';
                break;
        }
    }  

?>