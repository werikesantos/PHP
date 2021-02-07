<?php 

    //ESSA É UMA ESTRUTURA DE UM FUNÇÃO, QUE PELO NOME DA FUNÇÃO É POSSÍVEL SER CHAMADA POR OUTRA CLASSE
    //VEJA NA CLASSE 'main.php' COMO ELA CHAMA ESSE MÉTODO PELO NOME.
    //AO SER CHAMADA EM OUTRO ARQUIVO, SERÁ EXECUTADO TUDO O QUE ESTÁ DENTRO DESSE MÉTODO.
    function explicar(){
        echo '<h3>Acompanhe e estude as anotações dos códigos do módulo 01 -  aula 07!</h3>';
        echo 'Veja esse exemplo abaixo para entender como funciona a atribuição dos valores:<br><br>';
        echo 'x = 10 <br>x + 2 = 12<br>x = ?';
        echo '<br><br>A letra (x) será chamada de variável, pois receberá um determinado valor.';
        echo '<br>Ou seja, a letra passa a receber o valor 10.';
        echo '<br>Agora sabendo o valor de (x), qual será o seu resultado final?';
        echo '<br>Se você respondeu (12), acertou!<br>';
        echo '<br>Veja, isso aconteceu pois a variável (x), na primeira linha recebeu o valor 10 e depois foi somado +2';
        echo '<br>Totalizando no número 12!';
    }

    //ESSE MÉTODO ESTÁ CRIANDO UM CAMPO PARA SER DIGITADO 
    //DEPOIS PEGANDO O VALOR DENTRO DO CAMPO E ATRIBUINDO A UMA VARIÁVEL
    function valorCampo(){
        
        //INICIANDO O VALOR DA VARIÁVEL PARA QUE NÃO DE ERRO DE VARIÁVEL NAO INICIALIZADA
        $x = null;

        echo'<form method="post" action="main.php">
                <label for="campo01"><br>Atribua um valor para(x):<br></label>
                <input placeholder="Digite um valor" type="text" id="campo01" name="campo01">
                <input type="submit" value="enviar">
            </form>';
        
        //$_POST =  VAI BUSCAR TODOS OS TIPOS DE ENVIO PELO MÉTODO POST
        //['campo01'] = AO LOCALIZAR UM CAMPO COM O NOME DE IDENTIFICAÇÃO CONFORME ESTABELECIDO 
        //NA LINHA DE BAIXO ESSE VALOR É ATRIBUÍDO A UMA VARIÁVEL $X.
        if(isset($_POST['campo01'])){
            $x = $_POST['campo01'];
        }
        //POR FIM, O RESULTADO DA VARIÁVEL É RETORNADO PARA O MÉDOTO PARA SER UTILIZADO DE OUTRAS FORMAS.
        return $x;
    }

    //O MESMO MÉTODO É ATRIBUÍDO PARA OS DEMAIS MÉTODOS ABAIXO
    //O QUE SERÁ ALTERADO É O OPERADOR ARTIMÉTICO
    function somar($x){
        echo 'SOMAR<br>========<br>';
        echo "X = $x <br>";
        if ($x == null) {
            $x = $x;
        }else{
            $x = $x + 2;
            echo "X + 2 = $x";
        }
        echo '<br>-------------<br><br>';
    }
    function subtrair($x){ 
        echo 'SUBTRAIR<br>========<br>';
        echo "X = $x <br>";
        if ($x == null) {
            $x = $x;
        }else{
            $x = $x - 5;
            echo "X - 5 = $x";
        }
        echo '<br>-------------<br><br>';
    }
    function multiplicar($x){
        echo 'MULTIPLICAR<br>========<br>';
        echo "X = $x <br>";
        if ($x == null) {
            $x = $x;
        }else{
            $x = $x * 4;
            echo "X * 4 = $x";
        }
        echo '<br>-------------<br><br>';
    }
    function divisao($x){
        echo 'DIVISÃO<br>========<br>';
        echo "X = $x <br>";
        if ($x == null) {
            $x = $x;
        }else{
            $x = $x / 2;
            echo "X / 2 = $x";
        }
        echo '<br>-------------<br>';
    }
?>