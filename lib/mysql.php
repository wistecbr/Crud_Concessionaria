<?php

use function PHPSTORM_META\type;

    function conecta() {
        $host = 'localhost';
        $user = 'root';
        $password = 'dasd';
        $database = 'concessionaria';
        $mysqli = mysqli_connect($host, $user, $password, $database);

        if (mysqli_connect_errno()) {
            return NULL;
        }else {
            return $mysqli;
        }
    }


    if(conecta() === null){
        echo 'Houve erro ';
    }else {
        echo 'Tudo Certo ';
        var_dump(conecta());
    }

?>