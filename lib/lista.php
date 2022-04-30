<?php
    
    $lista = []; // isso é um vetor
    $carro = array('modelo'=> 'Fox', 'marca' => 'Volkswagem', 'ano' => 2021, 'preco' => 64000); 
    // acima é um objeto, com as propriedades modelo, marca, ano e o preco
    array_push($lista, $carro);
    // add mais um carro na lista
    $carro = array('modelo'=> 'Gol', 'marca' => 'Volkswagem', 'ano' => 2019, 'preco' => 50000); 
    array_push($lista, $carro);

    function exportaLista(){
        return $GLOBALS['lista'];
    }

?>