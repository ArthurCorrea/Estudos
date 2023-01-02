<?php
    require_once 'Pessoa.php';
    class Funcionario extends Pessoa {
        private $setor;
        private $trabalhando;

        function mudarTrabalho() {
            $this->trabalhando = !$this->trabalhando;
        }

        function __construct($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        function getSetor() {
            return $this->setor;
        }

        function setSetor($s) {
            $this->setor = $s;
        }

        function getTrabalhando() {
            return $this->trabalhando;
        }

        function setTrabalhando($t) {
            $this->trabalhando = $t;
        }
    }
?>