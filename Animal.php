<?php

    class Animal {

        public $nome;
        public $raca;
        public $qntPatas;
        public $cor;
        public $peso;
        public $tamanho;

        public function __construct(string $nome, string $raca, int $qntPatas, string $cor, string $peso, string $tamanho) {
            $this->nome = $nome;
            $this->raca = $raca;
            $this->qntPatas = $qntPatas;
            $this->cor = $cor;
            $this->peso = $peso;
            $this->tamanho =$tamanho;
        }

        public function falar(){

        }

    }

?>