<?php
    abstract class Animal {
        // vai ser abstrato pra poder ser sobrescrito por polimorfismo
        protected $peso;
        protected $idade;
        protected $membros;

        // métodos que serão sobrescritos em cada classe
        public abstract function locomover();
        public abstract function alimentar();
        public abstract function emitirSom();

        function getPeso() {
            return $this->peso;
        }

        function setPeso($p) {
            $this->peso = $p;
        }

        function getIdade() {
            return $this->idade;
        }

        function setIdade($i) {
            $this->idade = $i;
        }

        function getMembros() {
            return $this->membros;
        }

        function setMembros($m) {
            $this->membros = $m;
        }
    }
?>