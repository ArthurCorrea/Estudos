<?php
    require_once 'AcoesVideo.php';
    class Video implements AcoesVideos {
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        function play() {
            $this->reproduzindo = true;
        }

        function pause() { 
            $this->reproduzindo = false;
        }

        function like() {
            $this->curtidas++;
        }

        function __construct($titulo) {
            $this->titulo = $titulo;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

        function getTitulo() {
            return $this->titulo;
        }

        function setTitulo($t) {
            $this->titulo = $t;
        }

        function getAvaliacao() {
            return $this->avaliacao;
        }

        function setAvaliacao($t) {
            $media = ($this->avaliacao + $t) / $this->views;
            $this->avaliacao = $media;
        }

        function getViews() {
            return $this->views;
        }

        function setViews($t) {
            $this->titulo = $t;
        }

        function getCurtidas() {
            return $this->curtidas;
        }

        function setCurtidas($t) {
            $this->curtidas = $t;
        }

        function getReproduzindo() {
            return $this->reproduzindo;
        }

        function setReproduzindo($t) {
            $this->reproduzindo = $t;
        }
    }
?>