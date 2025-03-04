<?php

    require_once "Produto.php";
    require_once "Clinica.php";
    require_once "Humano.php";

    class Venda{

        public $produtos = [];
        private Humano $comprador;

        public function __construct($produtos, Humano $comprador) {
            $this->produtos = $produtos;
            $this->comprador = $comprador;
        }

    }
?>