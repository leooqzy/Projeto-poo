<?php

    class Funcionario extends Humano {

        private $cargo;
        private $salario;

        public function __construct(string $nome, int $idade, string $endereco, string $contato, string $cargo, int $salario) {
            parent::__construct( $nome, $idade, $endereco, $contato);
            $this->salario = $salario;
            $this->cargo = $cargo;
        }

    }

?>