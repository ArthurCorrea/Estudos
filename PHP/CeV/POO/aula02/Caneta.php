<?php
    class Caneta {
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        function rabiscar() {
            if($this->tampada) {
                echo "Rabiscando...<br>";
            } else {
                echo "Erro! A caneta está tampada!<br>";
            }
        }

        function tampar() {
            $this->tampada = true;
        }

        function destampar() {  
            $this->tampada = false;
        }

    }
?>