<?php

    require_once "Animal.php";
    require_once "Humano.php";

    class Foca extends Animal {

        public function __construct(string $nome, string $raca, string $cor, string $peso, string $tamanho, Humano $dono) {
            parent::__construct($nome, $raca, 4, $cor, $peso, $tamanho, $dono);
        }

        function falar(){
            echo "OR OR OR \n";
        }

    }

?>