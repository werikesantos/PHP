<?php

    include_once '../../../B7WEB/menu.html';
    include_once '../../../B7WEB/home.html';

    include_once "condicionalIF.php";

    //MOSTRAR NA TELA SE É MAIOR OU MENOR DE IDADE!

?>
    <h2 style="color: orangered;">Ao menor de 18 anos não é permitido o fornecimento de bebida alcoólica!</h2>

    <!--CRIANDO CAMPOS USANDO HTML5 PARA GUARDAR DADOS-->
    <form method="POST"><!--TIPO DE ENVIO DOS DADOS USANDO O MÉTODO POST-->

        <label><strong>Digite seu nome:</strong></label><br/><!--TÍTULO PARA O CAMPO-->
        <input type="text" name="nome"><br/><br/><!--CRIAÇÃO DO CAMPO-->
        <label><strong>Ano de nascimento:</strong></label><br/>
        <input type="text" name="ano"><br/><br/>
        <input type="submit" value="Enviar"><!--ENVIADO OS DADOS USANDO O MÉTODO POST(DEFINIDO NA LINHA 14)-->

    </form>

    <h3 style="color: tomato;">DADOS CADASTRADOS COM SUCESSO!</h3>

<?php cadastro(); ?>

    <h3 style="color: tomato;">RESULTADO:</h3>

<?php

    echo resultado();

    include_once '../../../B7WEB/footer.html';

?>