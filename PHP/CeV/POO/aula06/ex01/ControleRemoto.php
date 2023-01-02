<?php
    require_once 'Controlador.php';
    class ControleRemoto implements Controlador {

        // atributos
        private $volume;
        private $ligado;
        private $tocando;


        // métodos especiais
        public function __construct() {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        private function setVolume($v) {
            $this->volume = $v;
        }

        private function getVolume() {
            return $this->volume;
        }


        private function setLigado($l) {
            $this->ligado = $l;
        }

        private function getLigado() {
            return $this->ligado;
        }


        private function setTocando($t) {
            $this->tocando = $t;
        }

        private function getTocando() {
            return $this->tocando;
        }


        // métodos específicos
        public function ligar() {
            $this->setLigado(true);
        }

        public function desligar() {
            $this->setLigado(false);
        }

        public function abrirMenu() {
            echo "<p>------- MENU -------</p>";
            echo "<br>Ligado? " . ($this->getLigado() ? "Sim" : "Não");
            echo "<br>Tocando? " . ($this->getTocando() ? "Sim" : "Não");
            echo "<br>Volume: {$this->getVolume()}";
            for($i = 0; $i <= $this->getVolume(); $i += 10) {
                echo "|";
            }
            echo "<br>";
        }

        public function fecharMenu() {
            echo "Fechando Menu...";
        }

        public function maisVolume() {
            if($this->getLigado()) {
                $this->setVolume($this->getVolume() + 5);
            } else {
                echo "Não dá pra aumentar o volume";
            }
        }

        public function menosVolume() {
            if($this->getLigado()) {
                $this->setVolume($this->getVolume() - 5);
            } else {
                echo "Não dá pra diminuir o volume";
            }
        }

        public function play() {
            if($this->getLigado() && !($this->getTocando())) {
                $this->setTocando(true);
            }
        }

        public function pause() {
            if($this->getLigado() && $this->getTocando()) {
                $this->setTocando(false);
            }
        }
    }
?>