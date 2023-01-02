<?php
    class Caneta {
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar() {
            if($this->tampada) {
                echo "Rabiscando...<br>";
            } else {
                echo "Erro! A caneta está tampada!<br>";
            }
        }

        public function tampar() {
            $this->tampada = false;
        }

        public function destampar() {  
            $this->tampada = true;
        }

    }
?>