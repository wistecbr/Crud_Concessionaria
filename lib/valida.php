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
    }else  if(isset($_POST) && isset($_POST['up_modelo']) && isset($_POST['up_marca'])
    && isset($_POST['up_ano']) && isset($_POST['up_preco']) && isset($_POST['id'])){
        $modelo = $_POST['up_modelo'];
        $marca = $_POST['up_marca'];
        $ano = (INT) $_POST['up_ano'];
        $preco = (FLOAT) $_POST['up_preco'];
        $id = (INT) $_POST['id'];

        $resposta = atulizaCarro($id, $modelo, $marca, $ano, $preco);
        // se a resposta for TRUE sinal que foi cadastrado com sucesso.
        // caso contrário redireciona para página de cadastro novamente.
        //*
        if($resposta === NULL){
            header('Location: ../editar.php?id='.$id. '&modelo='.$modelo. '&ano='.$ano.'&preco='.$preco); 
        }else if($resposta === false){
            header('Location: ../editar.php?id='.$id. '&modelo='.$modelo. '&ano='.$ano.'&preco='.$preco); 
        }else {
            // sucesso redirecionar para a lista.
            header('Location: ../carros.php'); 
        }
                
    }

    // get remover = id que vamos remover
    if(isset($_GET) && isset($_GET['remover'])){
        $id = (INT) $_GET['remover'];
        $resposta = removeCarro($id);
        if($resposta === NULL){
            header('Location: ../carros.php?erro=connection');  
        }else if($resposta === false){
            header('Location: ../carros.php?erro=query');
        }else {
            // sucesso redirecionar para a lista.
            header('Location: ../carros.php'); 
        }
    }

    if(isset($_GET) && isset($_GET['editar'])){
        $id = (INT) $_GET['editar'];
        $resposta = buscaCarro($id);
        if($resposta === NULL){
            header('Location: ../carros.php?erro=connection');  
        }else if($resposta === false){
            header('Location: ../carros.php?erro=query');
        }else {
            var_dump($resposta);
            $id = $resposta['id'];
            $modelo = $resposta['modelo'];
            $marca = $resposta['marca'];
            $ano = $resposta['ano'];
            $preco = $resposta['preco'];
            // sucesso redirecionar para a lista.
            header('Location: ../editar.php?id='.$id. '&modelo='.$modelo. '&ano='.$ano.'&preco='.$preco . '&marca='.$marca); 
        }
    }

?>