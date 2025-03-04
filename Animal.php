<?php

    require_once "Humano.php";

    class Animal {

        public $nome;
        public $raca;
        public $qntPatas;
        public $cor;
        public $peso;
        public $tamanho;
        public $dono;

        public function __construct(string $nome, string $raca, int $qntPatas, string $cor, string $peso, string $tamanho, Humano $dono) {
            $this->nome = $nome;
            $this->raca = $raca;
            $this->qntPatas = $qntPatas;
            $this->cor = $cor;
            $this->peso = $peso;
            $this->tamanho =$tamanho;
            $this->dono = $dono;
        }

        public function falar(){
            return "";
        }
    }

?>