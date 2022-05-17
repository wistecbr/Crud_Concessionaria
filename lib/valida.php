<?php
    include './mysql.php';
    //var_dump($_POST);
    if(isset($_POST) && isset($_POST['modelo']) && isset($_POST['marca'])
        && isset($_POST['ano']) && isset($_POST['preco'])){
        // variaveis irão receber os valores vindos da requisição post do formulário
        $modelo = strtoupper($_POST['modelo']); // colocar em letra maúscula https://www.php.net/manual/pt_BR/function.strtoupper.php
        $marca = $_POST['marca'];
        $ano = (INT) $_POST['ano'];
        $preco = (FLOAT) $_POST['preco'];
        $img = $_FILES["imagem"];
        $mysqlImg = NULL;
        var_dump($img);
        if($img){
            $nome = $img['name'];
            $local = '../assests/img/'.$nome; // local que a img será movida
            $localImg = './assests/img/'.$nome; // info do end que a img estará salva
            if(move_uploaded_file($img['tmp_name'], $local)){
                $mysqlImg = $localImg;
            }
        }
        // as variavéis são passadas como paramentro para função de cadastro no
        // banco de dados 
        $resposta = cadastraCarro($modelo, $marca, $ano, $preco, $mysqlImg);
        // se a resposta for TRUE sinal que foi cadastrado com sucesso.
        // caso contrário redireciona para página de cadastro novamente.
        //*
        if($resposta === NULL){
            header('Location: ../cadastro.php?erro=connection');  
        }else if($resposta === false){
            header('Location: ../cadastro.php?erro=query');
        }else {
            // sucesso redirecionar para a lista.
            header('Location: ../carros.php'); 
        }
        //*/
    } 

?>