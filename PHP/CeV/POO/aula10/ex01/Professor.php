<?php
    require_once 'Pessoa.php';
    class Professor extends Pessoa {
        private $especialidade;
        private $salario;

        function receberAumento($v) {
            $this->setSalario($this->getSalario() + $v);
        }

        function __construct($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        function getEspecialidade() {
            return $this->especialidade;
        }

        function setEspecialidade($m) {
            $this->especialidade = $m;
        }

        function getSalario() {
            return $this->salario;
        }

        function setSalario($c) {
            $this->salario = $c;
        }
    }
?>