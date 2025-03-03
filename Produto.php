<?php

    require_once "Clinica.php";

    class Produto {

        public $nome;
        public $preco;

        public function __construct(string $nome, float $preco) {
            $this->nome = $nome;
            $this->preco = $preco;
        }
    }
?>