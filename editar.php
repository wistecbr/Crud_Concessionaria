<?php
if (
    isset($_GET) && isset($_GET['id']) && isset($_GET['modelo'])
    && isset($_GET['ano']) && isset($_GET['preco']) && isset($_GET['marca'])
) {
    $id = $_GET['id'];
    $modelo = $_GET['modelo'];
    $ano = $_GET['ano'];
    $preco = $_GET['preco'];
    $marca =  $_GET['marca'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/css/reset.css">
    <link rel="stylesheet" href="./assests/css/stilo.css">
    <script src="./assests/js/script.js" defer></script>
    <title>Editar Carro</title>
</head>

<body>
    <header>
        <figure>
            <img src="" alt="logo">
        </figure>
        <ul>
            <li> <a href="./">Home</a></li>
            <li><a href="./carros.php">Lista de carros</a></li>
            <li><a href="./cadastro.php">Cadastrar Carro</a></li>
        </ul>
    </header>
    <main>
        <form action="./lib/valida.php" method="post" enctype="multipart/form-data">
            <?php
            echo '<input name="id" type="number"  id="box_id" value="' . $id . '" style="display: none"/>';
            ?>
            <p>
                <label> Modelo: </label>
                <?php
                echo '<input name="up_modelo" type="text" id="box_modelo" value="' . $modelo . '"/>';
                ?>
            </p>

            <p>
                <label> Marca: </label>
                <select id="box_marca" name="up_marca">
                <?php
                    echo 'test';
                    $lista = [
                        'VOLKSWAGEM', 
                        'CHEVROLET', 
                        'FIAT', 
                        'JEEP',
                        'RENAULT',
                        'PEGOUT',
                        'HYUNDAI',
                        'TOYOTA',
                        'HONDA',
                        'OUTROS'
                    ];
                    for($i =0 ; $i < count($lista); $i++){
                        if($lista[$i] === $marca){
                            echo '<option value="'.$lista[$i]. '" selected>'.$lista[$i].'</option>';
                        }else {
                            echo '<option value="'.$lista[$i]. '">'.$lista[$i].'</option>';
                        }
                        
                    }
                ?>
                </select>
            </p>

            <p>
                <label> Ano: </label>
                <?php
                echo '<input name="up_ano" type="number" id="box_ano"value="' . $ano . '"/>';
                ?>
            </p>

            <p>
                <label> Preço: </label>
                <?php
                echo '<input name="up_preco" type="number" id="box_preco"value="' . $preco . '"/>';
                ?>
            </p>
            <p>
                <label> Imagem: </label>
                <input name="up_imagem" type="file" id="box_img">
            </p>

            <p>
                <input type="submit" value="Editar">
                <input type="button" value="Cancelar" onclick="bt_cancelar_up()">
            </p>

        </form>

    </main>
    <footer>

    </footer>
</body>

</html>