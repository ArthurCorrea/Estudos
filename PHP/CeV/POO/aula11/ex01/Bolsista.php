<?php
    require_once 'Aluno.php';
    class Bolsista extends Aluno {
        // Bolsista vai ter tudo que Aluno tem, ou seja, tudo que Pessoa tem
        private $bolsa;

        function renovarBolsa() {

        }

        // sobreposição de métodos
        function pagarMensalidade() {

        }    
        
    }
?>