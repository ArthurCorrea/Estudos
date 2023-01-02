<?php
    abstract class Animal {
        // vai ser abstrato pra poder ser sobrecarregado por polimorfismo
        protected $peso, $idade, $membros;

        // métodos que serão sobrecarregados em cada classe
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