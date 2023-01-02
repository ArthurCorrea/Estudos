<?php
    require_once 'Video.php';
    require_once 'Gafanhoto.php';
    class Visualizacao {
        private $espectador;
        private $filme;

        function avaliar() {
            $this->filme->setAvaliacao(5);
        }

        function avaliarNota($nota) {
            $this->filme->setAvaliacao($nota);
        }

        function avaliarPorcentagem($porcentagem) {
            if($porcentagem <= 20) {
                $nova = 3;
            } elseif($porcentagem <= 50) {
                $nova = 5;
            } elseif($porcentagem<=90) {
                $nova = 8;
            } else {
                $nova = 10;
            }
            $this->filme->setAvaliacao($nova);
        }

        function __construct($espec, $filme) {
            $this->espectador = $espec;
            $this->filme = $filme;

            $this->filme->setViews($this->filme->getViews() + 1);

            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        }

        function getEspectador() {
            return $this->espectador;
        }

        function setEspectador($t) {
            $this->espectador = $t;
        }

        function getFilme() {
            return $this->filme;
        }

        function setFilme($t) {
            $this->filme = $t;
        }
    }
?>