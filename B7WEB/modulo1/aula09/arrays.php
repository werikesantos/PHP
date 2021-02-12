<?php

    function linha()
    {
        echo '<br>';
    }

    function lasanhaBolonhesa()
    {
        echo '<strong>Lasanha a bolonhesa:</strong/><h5>Ingredientes:</h5>';

        /* 
        * ESSA É UMA ESTRUTURA DE UM ARRAY -> $ingredientes = [];
        * ELA SERVE PARA GUARDAR VÁRIOS DADOS EM UMA UNICA VARIÁVEL.
        * CADA POSIÇÃO É NUMERADA COMEÇANDO DO NÚMERO 0.
        * EXECUTANDO O EXEMPLO ABAIXO VAI MOSTRAR: BOA TARDE!
        *
        *        posição 0/ posição 1/ posição 2
        * $frase[boa tarde, boa noite, bom dia];
        *
        * echo $ingredientes = [0]; -> boa tarde
        * echo $ingredientes = [2]; -> bom dia
        *
        * O ARRAY PODE SER DE NÚMEROS, STRING, CARACTERES ETC...
        *
        */

        $ingredientes = [
            '* 1 pacote de 500g de massa fresca<br>',
            '* 500g de carne moída (patinho, maminha ou outra de sua preferência)<br>',
            '* 5 tomates sem pele amassados ou batidos no liquidificador<br>',
            '* 4 dentes de alho picadinhos<br>',
            '* 1 cebola inteira<br>',
            '* Parmesão ralado a gosto para gratinar<br>',
        ];

        foreach ($ingredientes as $ingrediente) {
            echo $ingrediente;
        }

        echo '<hr style="width:40%;text-align:left;margin-left:0">';
        
    }

    function lasanhaPresuntoQueijo()
    {
        echo '<strong>Lasanha de presunto e queijo:</strong/><h5>Ingredientes:</h5>';

        $ingredientes = [
            '* 1 pacote de 500g de massa fresca<br>',
            '* 300g de presunto magro em fatias<br>',
            '* 300g de queijo mussarela em fatias<br>',
            '* 4 dentes de alho picadinhos<br>',
            '* Parmesão ralado a gosto<br>'
        ];

        foreach ($ingredientes as $ingrediente) {
            echo $ingrediente;
        }
        
        echo '<hr style="width:40%;text-align:left;margin-left:0">';
        
    }

    function LasanhaFrangoQueijoPresunto()
    {
        echo '<strong>Lasanha de frango, queijo e presunto:</strong/><h5>Ingredientes:</h5>';

        $ingredientes = [
            '* 5 filés de peito de frango desfiados<br>',
            '* 1/2 kg de queijo mussarela<br>',
            '* 800 g de presunto<br>',
            '* 1 pote de requeijão médio<br>',
            '* 1 tomate<br>',
            '* 1 cebola<br>',
            '* 1kg de massa pronta para lasanha (dois pacotes)<br>',
            '* 5 copos de leite<br>',
            '* 1 colher e ½ de farinha de trigo<br>',
            '* 2 caixas de creme de leite<br>',
            '* Ervas finas, pimenta do reino e sal a gosto<br>',
        ];

        foreach ($ingredientes as $ingrediente) {
            echo $ingrediente;
        }
        
        echo '<hr style="width:40%;text-align:left;margin-left:0">';

    }

    function lasanhaBerinjela()
    {
        echo '<strong>Lasanha de berinjela:</strong/><h5>Ingredientes:</h5>';

        $ingredientes = [
            '* 3 berinjelas grandes<br>',
            '* 1 lata de molho de tomate<br>',
            '* 1 maço de coentro cortado<br>',
            '* Azeitonas sem caroços cortadas<br>',
            '* 300g de queijo mussarela fatiado<br>',
            '* 300g de presunto fatiado<br>',
            '* 2 colheres de azeite<br>',
            '* Catupiry light<br>',
        ];
        
        foreach ($ingredientes as $ingrediente) {
            echo $ingrediente;
        }

        echo '<hr style="width:40%;text-align:left;margin-left:0">';
        
    }
?>