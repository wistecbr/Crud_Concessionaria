<?php
    include './lib/mysql.php';
    $carros = listarCarros();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/css/reset.css">
    <link rel="stylesheet" href="./assests/css/stilos.css">
    <script src="./assests/js/scripts.js" defer></script>
    <title>Lista de Carros</title>
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
        <table>
            <tr>
                <th class="cor_sim">Modelo</th>
                <th class="cor_nao">Marca</th>
                <th class="cor_sim">Ano</th>
                <th class="cor_nao">Preço</th>
                <th class="cor_sim">Opções</th>
            </tr>
            <?php
                for($i = 0; $i < count($carros); $i++){
                    if(($i%2) !== 0 ){
                        echo '<tr class="cor_nao">';
                    }else {
                        echo '<tr>';
                    }
                        echo '<td>'. $carros[$i]['modelo'] .'</td>';
                        echo '<td>'. $carros[$i]['marca'] .'</td>';
                        echo '<td>'. $carros[$i]['ano'] .'</td>';
                        echo '<td> R$ '. $carros[$i]['preco'] .'</td>';
                        echo '<td>
                            <button onclick="deletar('.$carros[$i]['id'].')">Deletar</button>
                            <button onclick="editar('.$carros[$i]['id'].')">Editar</button>
                        </td>';
                    echo '</tr>';
                }
            ?>              
        </table>
    </main>
    <footer>

    </footer>
</body>
</html>