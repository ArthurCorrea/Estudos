<?php
    require_once 'Pessoa.php';
    class Gafanhoto extends Pessoa {
        private $login;
        private $totAssistido;

        function assistirMaisUm() {
            $this->totAssistido++;
        }

        function __construct($nome, $idade, $sexo, $login) {
            parent::__construct($nome, $idade, $sexo); 
            $this->login = $login;
            $this->totAssistido = 0;
        }

        function getLogin() {
            return $this->login;
        }

        function setLogin($t) {
            $this->login = $t;
        }

        function getTotAssistido() {
            return $this->totAssistido;
        }

        function setTotAssistido($t) {
            $this->totAssistido = $t;
        }
    }
?>