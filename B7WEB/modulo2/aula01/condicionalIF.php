<?php

    //PEGANDO O DADO DO CAMPO ATRAVÉS name="nome" QUE FOI DEFINIDO COMO ATRIBUTO NA TAG NO HTML
    function nome(){
        if(isset($_POST['nome'])){ //isset( ) => SE TAL VALOR ESTIVER COM UM DETERMINADO DADO
            //$_POST[' '] => ARRAY QUE PROCURA UM ENVIO DE DADO PELO MÉTODO POST COM O NOME DEFINIDO name="nome".
            $nome = $_POST['nome'];
            return $nome;
        }
    }

    //REPETINDO O PROCESSO PARA PEGAR OUTRO CAMPO
    function ano(){ 
        if(isset($_POST['ano'])){
            $ano = $_POST['ano'];
            return $ano;
        }
    }

    //IMPRIMINDO O RESULTADO DO QUE FOI CADASTRADO NA TELA
    function cadastro(){
        echo "<strong>Nome:</strong> ".nome()."<br>";
        echo "<strong>Ano:</strong> ".ano()."<br><br>";
        echo "<hr>";
    }

    function resultado(){

        $ano = $_POST['ano']; //PEGANDO O VALOR DO CAMPO name="ano" DECLARADO NO HTML

        $idadeVerdadeira = 2021 - $ano; //CALCULANDO A IDADE E GUARDANDO EM UMA NOVA VARIAVEL
    
        if ($idadeVerdadeira >= 18) { //SE FOR MAIOR QUE 18 OU IGUAL, JÁ É MAIOR DE IDADE. CASO CONTRARIO É MENOR!
            return "<strong>Maior de idade! &#128080;</strong>";
        }else {
            return "<strong><u>Menor</u></strong> de idade!<br><strong>Não podemos finalizar sua compra!<strong>";
        }
    }

?>