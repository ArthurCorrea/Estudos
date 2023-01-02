<?php
    require_once 'Mamifero.php';
    class Cachorro extends Mamifero {

        public function enterrarOsso() {
            echo 'Cachorro enterrando osso.';
        }

        public function abanarRabo() {
            echo 'Cachorro abanando rabo.';
        }
    }
?>