<?php
    class Caneta {
        public $modelo;
        private $cor;
        private $ponta;
        private $tampada;


        /*
         - O constructor pode ter o mesmo nome da classe e cria esses atributos e métodos automaticamente
         - Pode ter o nome de public function __constructor()
         - Pode receber parâmetros que serão passados na instanciação
        */
        public function __construct($m, $c, $p){  
            
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampar();
        }

        public function tampar() {
            $this->tampada = true;
        }

        public function getModelo() {
            return $this->modelo;
        }

        // vai ser passado como parâmetro na instanciação 
        public function setModelo($m) {
            $this->modelo = $m;
        }

        public function getPonta() {
            return $this->ponta;
        }

        public function setPonta($p) {
            $this->ponta = $p;
        }
    }
    
?>