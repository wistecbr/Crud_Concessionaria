<?php

    function conecta() {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'concessionaria';
        $mysqli = mysqli_connect($host, $user, $password, $database);

        if (mysqli_connect_errno()) {
            return NULL;
        }else {
            return $mysqli;
        }
    }

    function listarCarros() {
        $lista = [];
        $query = 'SELECT id, modelo, marca, ano, preco, img FROM carros;';
        $link = conecta();
        if($link !== NULL){
            $result = mysqli_query($link, $query);
            if($result){
                while ($row = mysqli_fetch_row($result)) {
                    // aqui estamos pegando o objeto $row e tranformando-o em um
                    // objeto carro, na mesma forma que iremos utilizar na página
                    // listar carros.
                   $carro = array(
                       'id' => (INT) $row[0],
                        'modelo' => $row[1], 
                        'marca' => $row[2],
                        'ano' => (INT) $row[3], 
                        'preco' => (FLOAT) $row[4],
                        'img' => $row[5]
                    );
                    array_push($lista, $carro);
                }
            }
        }
        return $lista;
    }

    function cadastraCarro($modelo, $marca, $ano, $preco, $img){
        $query = "INSERT INTO carros (modelo, marca, ano, preco, img)  
        values('" . $modelo . "','" . $marca . "'," . $ano . "," . $preco .",'"
        . $img . "');";
        $link = conecta();
        if($link !== NULL){
            $result = mysqli_query($link, $query);
            return $result;
        }else {
            return NULL;
        }
    }

    function removerCarro($id){
        
    }

?>