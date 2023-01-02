<?php
    require_once 'Animal.php';
    class Mamifero extends Animal {
        private $corPelo;

        // os 3 métodos foram sobrescritos dando uma função pra cada tipo de animal
        public function locomover() {
            echo 'Correndo!';
        }

        public function alimentar() {
            echo 'Mamando.';
        }

        public function emitirSom() {
            echo 'Som de Mamífero.';
        }

        function getCorPelo() {
            return $this->corPelo;
        }

        function setCorPelo($c) {
            $this->corPelo = $c;
        }

    }
?>