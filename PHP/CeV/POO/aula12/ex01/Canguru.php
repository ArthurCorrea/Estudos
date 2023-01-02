<?php
    require_once 'Mamifero.php';
    class Canguru extends Mamifero {

        // canguru não corre, então esse método tem que ser sobreposto
        public function locomover() {
            echo 'Saltando!';
        }

        public function usarBolsa() {
            echo 'Canguru usando bolsa.';
        }
    }
?>