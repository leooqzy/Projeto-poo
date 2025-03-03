<?php

    require_once "Animal.php";

    class Canario extends Animal {

        public function __construct(string $nome, string $raca, int $qntPatas, string $cor, string $peso, string $tamanho) {
            parent::__construct($nome, $raca, $qntPatas, $cor, $peso, $tamanho);
        }

        function falar(){
            echo "Piu-piu \n";
        }

    }

?>