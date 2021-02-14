<?php

    function linha()
    {
        echo '<br><br>';
    }

    function listaReceitas()
    {
        //ABAIXO SEGUE UM MODELO DE ARRAY CONVENCIONAL
        //ESSE ARRAY PODE CARREGAR QUALQUER TIPO, SEJA ELE UMA STRING, INTEIRO, BOOLEAN...
        $ingredientes1 = [
            '* 1 pacote de 500g de massa fresca<br>',
            '* 500g de carne moída (patinho, maminha ou outra de sua preferência)<br>',
            '* 5 tomates sem pele amassados ou batidos no liquidificador<br>',
            '* 4 dentes de alho picadinhos<br>',
            '* 1 cebola inteira<br>',
            '* Parmesão ralado a gosto para gratinar<br>',
        ];

        //O ARRAY ABAIXO '$ingredientes2' ESTÁ CARREGANDO SEUAS INFORMAÇÕES(TIPO STRING) E TAMBÉM TODAS AS INFORMAÇÕES DO ARRAY ACIMA '$ingredientes1';
        $ingredientes2 = [
            $ingredientes1,
            '* 1 pacote de 500g de massa fresca<br>',
            '* 300g de presunto magro em fatias<br>',
            '* 300g de queijo mussarela em fatias<br>',
            '* 4 dentes de alho picadinhos<br>',
            '* Parmesão ralado a gosto<br>',
        ]; 
         
        //POSSO CARREGAR OUTRO ARRAY COLOCANDO EM QUALQUER POSIÇÃO DENTRO DO NOVO ARRAY.
        $ingredientes3 = [
            $ingredientes2,
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
    
        $ingredientes4 = [
            $ingredientes3,
            '* 3 berinjelas grandes<br>',
            '* 1 lata de molho de tomate<br>',
            '* 1 maço de coentro cortado<br>',
            '* Azeitonas sem caroços cortadas<br>',
            '* 300g de queijo mussarela fatiado<br>',
            '* 300g de presunto fatiado<br>',
            '* 2 colheres de azeite<br>',
            '* Catupiry light<br>',
        ];
        
        //print_r(); => É UM COMANDO NATIVO DO PHP PARA IMPRIMIR TODO O ARRAY
        print_r($ingredientes4);

    }
    
?>