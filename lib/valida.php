<?php
    var_dump($_POST);
    if(isset($_POST) && isset($_POST['modelo']) && isset($_POST['marca'])
        && isset($_POST['ano']) && isset($_POST['preco'])){
        echo 'OK';
    } else {
        header('Location: ../cadastro.php?erro=1');
    }
?>