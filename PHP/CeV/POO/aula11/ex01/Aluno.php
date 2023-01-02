<?php
    require_once 'Pessoa.php';
    class Aluno extends Pessoa {
        private $matricula;
        private $curso;

        function pagarMensalidade() {
            echo '<p>Mensalidade paga!</p>';
        }

        function cancelarMatricula() {
            echo "Matrícula cancelada.";
        }

        function __construct($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        function getMatricula() {
            return $this->matricula;
        }

        function setMatricula($m) {
            $this->matricula = $m;
        }

        function getCurso() {
            return $this->curso;
        }

        function setCurso($c) {
            $this->curso = $c;
        }
    }
?>