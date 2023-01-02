<?php
    abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        function ganharXP($n) {
            $this->experiencia += $n;
        }

        function __construct($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->experiencia = 0;
        }

        function getNome() {
            return $this->nome;
        }

        function setNome($t) {
            $this->nome = $t;
        }
        function getIdade() {
            return $this->idade;
        }

        function setIdade($t) {
            $this->idade = $t;
        }

        function getSexo() {
            return $this->sexo;
        }

        function setSexo($t) {
            $this->sexo = $t;
        }

        function getExperiencia() {
            return $this->experiencia;
        }

        function setExperiencia($t) {
            $this->experiencia = $t;
        }

    }
?>