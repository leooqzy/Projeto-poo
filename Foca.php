<?php

    require_once "Animal.php";

    class Foca extends Animal {

        public function __construct(string $nome, string $raça, int $qntPatas, string $cor, string $peso, string $tamanho) {
            parent::__construct($nome, $raça, $qntPatas, $cor, $peso, $tamanho);
        }

        function falar(){
            echo "OR OR OR \n";
        }

    }

?>