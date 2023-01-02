<?php 
    abstract class Pessoa {
        private $nome;
        private $idade;
        private $sexo;

        public final function fazerAniversario() {
            $this->idade++;
        }

        function __construct($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        function getNome() {
            return $this->nome;
        }

        function setNome($n) {
            $this->nome = $n;
        }

        function getIdade() {
            return $this->idade;
        }

        function setIdade($n) {
            $this->idade = $n;
        }

        function getSexo() {
            return $this->sexo;
        }

        function setSexo($n) {
            $this->sexo = $n;
        }

    }
?>