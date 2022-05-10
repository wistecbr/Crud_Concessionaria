<?php
    include './mysql.php';
    include './newMethod.php';
    //var_dump($_POST);
    if(isset($_POST) && isset($_POST['modelo']) && isset($_POST['marca'])
        && isset($_POST['ano']) && isset($_POST['preco'])){
        // variaveis irão receber os valores vindos da requisição post do formulário
        $modelo = strtoupper($_POST['modelo']); // colocar em letra maúscula https://www.php.net/manual/pt_BR/function.strtoupper.php
        $marca = $_POST['marca'];
        $ano = (INT) $_POST['ano'];
        $preco = (FLOAT) $_POST['preco'];
        // as variavéis são passadas como paramentro para função de cadastro no
        // banco de dados 
        $resposta = cadastraCarro($modelo, $marca, $ano, $preco);
        // se a resposta for TRUE sinal que foi cadastrado com sucesso.
        // caso contrário redireciona para página de cadastro novamente.
        if($resposta === NULL || $resposta === false){
            header('Location: ../cadastro.php?erro=1');  
        }else {
            // sucesso redirecionar para a lista.
            header('Location: ../carros.php'); 
        }
    } 

    var_dump($_DELETE);
?>