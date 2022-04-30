<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/css/reset.css">
    <link rel="stylesheet" href="./assests/css/stilos.css">
    <script src="./assests/js/script.js" defer></script>
    <title>Cadastrar Carro</title>
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
        <form action="" method="post">
            <p>
                <label> Modelo: </label>
                <input name="modelo" type="text" id="box_modelo">
            </p>

            <p>
                <label> Marca: </label>
                <input name="marca" type="text" id="box_marca">
            </p>

            <p>
                <label> Ano: </label>
                <input name="ano" type="number"  id="box_ano">
            </p>

            <p>
                <label> Preço: </label>
                <input name="preco" type="number" id="box_preco">
            </p>

            <p>
                <input type="submit" value="Cadastrar">
                <input type="button" value="Cancelar" onclick="bt_cancelar()">
            </p>

        </form>

    </main>
    <footer>

    </footer>
</body>
</html>