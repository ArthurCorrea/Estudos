<?php
    class Treino {
        var $duracao;
        var $volume;
        var $intervalo;
        var $musculo;
        var $carga;
        var $tecnicaAvancada;

        function aumentarCarga() {
            $this->carga += ($this->carga * 10) / 100;
        }

        function tecnicaAvancada() {
            $this->tecnicaAvancada = "Bi-set";
        }

    }
?>