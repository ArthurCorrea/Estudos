<?php
    class ContaBancaria {
        // Atributos
        public $numConta;
        protected $tipoConta;
        private $donoConta;
        private $saldoConta;
        private $statusConta;


        // Métodos especiais

        public function __construct() {
            $this->saldoConta = 0;
            $this->statusConta = false;
        }


        public function setNumConta($num) {
            $this->numConta = $num;
        }

        public function getNumConta() {
            return $this->numConta;
        }



        public function setTipoConta($tipo) {
            $this->tipoConta = $tipo;
        } 

        public function getTipoConta() {
            return $this->tipoConta;
        }



        public function setDonoConta($dono) {
            $this->donoConta = $dono;
        }

        public function getDonoConta() {
            return $this->donoConta;
        }



        public function setSaldoConta($saldo) {
            $this->saldoConta = $saldo;
        }

        public function getSaldoConta() {
            return $this->saldoConta;
        }



        public function setStatusConta($status) {
            $this->statusConta = $status;
        }

        public function getStatusConta() {
            return $this->statusConta;
        }


        // Métodos específicos
        public function abrirConta($dono, $num, $tipo) {
            if($tipo == 'CC') {
                $this->setSaldoConta(50);
            } else {
                $this->setSaldoConta(150);
            }

            $this->setTipoConta($tipo);
            $this->setNumConta($num);
            $this->setDonoConta($dono);
            $this->setStatusConta(true);

            echo "Conta aberta com sucesso!
            Número da conta: {$this->getNumConta()} 
            Dono da conta: {$this->getDonoConta()}
            Saldo da conta: R$ {$this->getSaldoConta()} <br>";


        }

        public function fecharConta() {
            if($this->getStatusConta()) {
                if($this->getSaldoConta() > 0) {
                    echo "Não é possível fechar a conta, pois há dinheiro nela.";
                    
                } else if($this->getSaldoConta() < 0) {
                    echo "Você está devendo ao banco, por isso não é possível fechar sua conta.";
                    
                } else {
                    $this->setStatusConta(false);
                    $this->numConta = 0;
                    $this->tipoConta = '';
                    $this->donoConta = '';
                    echo "<p>Conta encerrada com sucesso!</p>";
                }
            }
        }

        public function depositar($valor) {
            if($this->getStatusConta()) {
                $this->setSaldoConta($this->getSaldoConta() + $valor);
                echo "<p>Depósito de R$$valor realizado com sucesso!
                Novo saldo: R$ {$this->getSaldoConta()}</p>";
            }
        }

        public function sacar($valor) {
            if($this->getStatusConta()) {
                if($this->getSaldoConta() >= $valor) {
                    $this->setSaldoConta(
                        $this->getSaldoConta() - $valor);
                        echo "<p>Saque de R$$valor realizado com sucesso! 
                        Saldo restante: R$ {$this->getSaldoConta()}
                        </p>";
                } else {
                    echo "<p>Não é possível sacar R$$valor, pois você só tem R$ {$this->getSaldoConta()} de saldo disponível.</p>";
                }
            } else {
                echo "Impossível sacar, pois a conta está fechada.";
            }
        }

        public function pagarMensalidade() {
            if($this->getTipoConta() == 'CC') {
                $valorMensalidade = 12;
            } else {
                $valorMensalidade = 20;
            }

            if($this->getSaldoConta() > $valorMensalidade) {
                $this->setSaldoConta($this->getSaldoConta() - $valorMensalidade);

                echo "Mensalidade de R$$valorMensalidade paga com sucesso! Saldo restante: R$ {$this->getSaldoConta()}<br>";

            } else {
                echo "<p>Não é possível pagar a mensalidade de R$$valorMensalidade, pois você só tem R$ {$this->getSaldoConta()} disponível. </p>";
            }

            

        }
    }
?>