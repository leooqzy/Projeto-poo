<?php
    require_once "Animal.php";
    require_once "Humano.php";

    class Cachorro extends Animal {
        public function __construct(string $nome, string $raca, string $cor, string $peso, string $tamanho, Humano $dono) {
            parent::__construct($nome, $raca, 4, $cor, $peso, $tamanho, $dono);
        }

        public function falar() {
            return "Au Au!";
        }
    }
?>
