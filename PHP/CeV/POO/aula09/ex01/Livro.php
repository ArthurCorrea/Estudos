<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
    class Livro implements Publicacao {
    
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function detalhes() {
            echo "Livro {$this->getTitulo()} escrito por {$this->getAutor()}<br>";
            echo "Total de páginas: {$this->getTotPaginas()}<br>";
            echo "Sendo lido por: {$this->leitor->getNome()}";
        }


        function __construct($titulo, $autor, $totPaginas, $leitor) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->aberto = false;
            $this->pagAtual = 0;
            $this->leitor = $leitor;
        }   


        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($t) {
            $this->titulo = $t;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function setAutor($a) {
            $this->autor = $a;
        }

        public function getTotPaginas() {
            return $this->totPaginas;
        }

        public function setTotPaginas($t) {
            $this->totPaginas = $t;
        }

        
        public function getPagAtual() {
            return $this->pagAtual;
        }
        public function setPagAtual($t) {
            $this->pagAtual = $t;
        }
        
        
        public function getAberto() {
            return $this->aberto;
        }

        public function setAberto($t) {
            $this->aberto = $t;
        }

        public function getLeitor() {
            return $this->leitor;
        }

        public function setLeitor($t) {
            $this->leitor = $t;
        }

        public function abrir() {
            $this->aberto = true;
        }

        public function fechar(){
            $this->aberto = false;
        }

        public function folhear($p){
            if($p > $this->totPaginas) {
                $this->pagAtual = 0;
            } else {
                $this->pagAtual = $p;
            }
        }

        public function avancarPag(){
            $this->pagAtual++;
        }

        public function voltarPag(){
            $this->pagAtual--;
        }


    }
?>