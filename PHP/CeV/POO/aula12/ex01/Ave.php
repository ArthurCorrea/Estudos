<?php
    require_once 'Animal.php';
    class Ave extends Animal {
        private $corPena;

        public function locomover() {
            echo 'Voando!';
        }

        public function alimentar() {
            echo 'Bicando.';
        }

        public function emitirSom() {
            echo 'Canto de pássaro.';
        }

        public function fazerNinho() {
            echo 'Fazendo ninho.';
        }

        function getCorPena() {
            return $this->corPena;
        }

        function setCorPena($c) {
            $this->corPena = $c;
        }
    }
?>