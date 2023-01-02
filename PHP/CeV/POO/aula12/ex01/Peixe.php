<?php
    require_once 'Animal.php';
    class Peixe extends Animal {
        private $corEscama;

        public function locomover() {
            echo 'Nadando!';
        }

        public function alimentar() {
            echo 'Comendo alguma coisa.';
        }

        public function emitirSom() {
            echo 'Peixe não faz som.';
        }

        public function soltarBolha() {
            echo 'Soltar uma bolha.';
        }

        function getCorEscama() {
            return $this->corEscama;
        }

        function setCorEscama($c) {
            $this->corEscama = $c;
        }
    }
?>