<?php
    require_once 'Lobo.php';
    class Cachorro extends Lobo {

        public function emitirSom() {
            echo 'Som de Cachorro.';
        }

        // PHP não suporta polimorfismo de sobrecarga, então a solução seria usar métodos com nomes diferentes (o que não é sobrecarga)

        public function reagirFrase($frase) {
            if($frase == 'Oi') {
                echo 'Abanar e latir';
            } else {
                echo 'Latir';
            }
        }

        public function reagirHora($horario) {
            if($horario < 12) {
                echo 'Abanar';
            } elseif($horario >= 18) {
                echo 'Ignorar';
            } else {
                echo 'Abanar e latir';
            }
        }

        public function reagirDono($dono) {
            if($dono) {
                echo 'Abanar';
            } else {
                echo 'Latir';
            }
        }

        public function reagirIdadePeso($idade, $peso) {
            if($idade < 5) {
                if($peso < 10) {
                    echo 'Abanar';
                } else {
                    echo 'Latir';
                }
            } else {
                if($peso < 10) {
                    echo 'Abanar e latir';
                } else {
                    echo 'Ignorar';
                }
            }
        }

        
    }
?>