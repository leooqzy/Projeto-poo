<?php

    class Animal {

        public $nome;
        public $raça;
        public $qntPatas;
        public $cor;
        public $peso;
        public $tamanho;

        public function __construct(Type $var = null) {
            $this->nome = $nome;
            $this->raça = $raça;
            $this->qntPatas = $qntPatas;
            $this->cor = $cor;
            $this->peso = $peso;
            $this->tamanho =$tamanho;
        }

        public function falar(){
            echo "Animal falando";
        }

    }

?>