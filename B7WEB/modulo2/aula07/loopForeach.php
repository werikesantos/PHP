<?php

    function linha(){
        echo "<br>";
    }  
    
    function foreach1(){
        $ingredientes = [
            '* 1 pacote de 500g de massa fresca<br>',
            '* 500g de carne moída (patinho, maminha ou outra de sua preferência)<br>',
            '* 5 tomates sem pele amassados ou batidos no liquidificador<br>',
            '* 4 dentes de alho picadinhos<br>',
            '* 1 cebola inteira<br>',
            '* Parmesão ralado a gosto para gratinar<br>',
        ];
    
        echo "<h4>Ingredientes:</h4>";
        //PARA CADA POSIÇÃO DE '$ingredientes' É ENVIADO PARA '$ingrediente'
        foreach ($ingredientes as $ingrediente) {
            echo $ingrediente;//E DEPOIS É IMPRMIDO
        }
    } 

    function foreach2(){
        $ingredientes = [
            '1 pacote de 500g de massa fresca<br>',
            '500g de carne moída (patinho, maminha ou outra de sua preferência)<br>',
            '5 tomates sem pele amassados ou batidos no liquidificador<br>',
            '4 dentes de alho picadinhos<br>',
            '1 cebola inteira<br>',
            'Parmesão ralado a gosto para gratinar<br>',
        ];
    
        echo "<h4>Ingredientes:</h4>";
        
        //A DIFERENÇA DESSE MODELO É QUE É POSÍVEL ACESSAR O NÚMERO DA POSIÇÃO '$posicaoVariavel'
        foreach ($ingredientes as $posicaoVariavel => $ingrediente) {
            echo "Ordem ".$posicaoVariavel.": ".$ingrediente;//CONCATENANDO AS DUAS E IMPRIMINDO
        }
    } 

    function foreach3(){
        $ingredientes = [
            '1 pacote de 500g de massa fresca<br>',
            '500g de carne moída (patinho, maminha ou outra de sua preferência)<br>',
            '5 tomates sem pele amassados ou batidos no liquidificador<br>',
            '4 dentes de alho picadinhos<br>',
            '1 cebola inteira<br>',
            'Parmesão ralado a gosto para gratinar<br>',
        ];
    
        echo "<h4>Ingredientes:</h4>";
        
        foreach ($ingredientes as $posicaoVariavel => $ingrediente) {
            //COMO NO EXEMPLO ACIMA A PRIMEIRA POSIÇÃO É '0' BASTA SOMAR +1 PARA COMEÇAR COM 1.
            echo "Ordem ".($posicaoVariavel + 1).": ".$ingrediente;
        }
    }

    function foreach4(){
        $ingredientes = [
            '1 pacote de 500g de massa fresca<br>',
            '500g de carne moída (patinho, maminha ou outra de sua preferência)<br>',
            '5 tomates sem pele amassados ou batidos no liquidificador<br>',
            '4 dentes de alho picadinhos<br>',
            '1 cebola inteira<br>',
            'Parmesão ralado a gosto para gratinar<br>',
        ];
    
        echo "<h4>Ingredientes:</h4>";
        
        //EXEMPLO DE LISTAGEM DESORDENADA USANDO FOREACH
        echo '<ul>';
        foreach ($ingredientes as $ingrediente) {
            echo '<li>'.$ingrediente.'</li>';
        }
        echo '</ul>';
    }

?>