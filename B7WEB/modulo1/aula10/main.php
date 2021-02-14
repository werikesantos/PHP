<?php

    include_once '../../../B7WEB/menu.html';
    include_once '../../../B7WEB/home.html';

    include_once "operador_array_spread.php";    

    $ingredientes1 = [
        '* 1 pacote de 500g de massa fresca<br>',
        '* 500g de carne moída (patinho, maminha ou outra de sua preferência)<br>',
        '* 5 tomates sem pele amassados ou batidos no liquidificador<br>',
        '* 4 dentes de alho picadinhos<br>',
        '* 1 cebola inteira<br>',
        '* Parmesão ralado a gosto para gratinar<br>',
    ];

    

    $ingredientes2 = [
        '* 1 pacote de 500g de massa fresca<br>',
        '* 300g de presunto magro em fatias<br>',
        '* 300g de queijo mussarela em fatias<br>',
        '* 4 dentes de alho picadinhos<br>',
        '* Parmesão ralado a gosto<br>',
        $ingredientes1,
    ];

    foreach ($ingredientes2 as $ingrediente) {
        
        echo $ingrediente;

    }

    foreach ($ingredientes2[5] as $ingrediente1) {
        
        echo $ingrediente1;

    }
        
        


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
    

    include_once '../../../B7WEB/footer.html';

?>

