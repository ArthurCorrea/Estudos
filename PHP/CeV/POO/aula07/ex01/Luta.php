<?php
require_once 'Lutador.php';
    class Luta {
        // atributos
        private $desafiado; // o tipo vai ser abstrato (Lutador)
        private $desafiante; // também é tipo abstrato 
        private $rounds;
        private $aprovada;

        // métodos especiais
        public function getDesafiado() {
            return $this->desafiado;
        }

        public function setDesafiado($dd) {
            $this->desafiado = $dd;
        }


        public function getDesafiante() {
            return $this->desafiante;
        }

        public function setDesafiante($df) {
            $this->desafiante = $df;
        }


        // métodos específicos
        public function marcarLuta($l1, $l2) {
            
            if($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2) {
                echo 'deu certo<br>';
                $this->aprovada = true;
                $this->setDesafiado($l1);  // l1 é o desafiado
                $this->setDesafiante($l2); // l2 é o desafiante
            } else {
                echo 'também deu certo<br>';
                $this->aprovada = false;
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }

        public function lutar() {
            if($this->aprovada) {
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0, 2);
                switch ($vencedor) {
                    case 0:
                        echo "<strong>A luta empatou!</strong><br>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1: // Desafiado vence
                        echo "<strong>{$this->desafiado->getNome()} ganhou!</strong><br>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2: // Desafiante vence
                        echo "<strong>{$this->desafiante->getNome()} ganhou!</strong><br>";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                        break;
                }
            } else {
                echo "Luta não pode acontecer.<br>";
            }
        }
    }
?>