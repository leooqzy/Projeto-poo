<?php

    require_once "Animal.php";

    class Humano {

        private $nome;
        private $idade;
        private $endereco;
        private $contato;

        public function __construct(string $nome, int $idade, string $endereco, string $contato) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->contato = $contato;

        }

        public function getNome(){
           return $this->nome;
        }

        public function getIdade(){
          return $this->idade;
        } 

        public function getEndereco(){
          return $this->endereco;
        } 

        public function getContato(){
           return $this->contato;
        }

    }

?>