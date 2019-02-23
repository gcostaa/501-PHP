<?php

    class Conta
    {

        public $saldo=0;
        public $titular;

        /**
         * Metodo para fazer um saque
         * @param float $valor->ex de PHP DOC
         */

        public function sacar($valor)
        {
            echo"<hr>Saque Efetuado Valor:<b> $valor</b><hr>";
            $this->saldo-=$valor;
        }

        /**
         * Metodo para fazer um deposito
         * @param float $valor
         */

        public function depositar($valor)
        {
            echo"<hr>Deposito Efetuado Valor:<b> $valor</b><hr>";
            $this->saldo+=$valor;
        }

        public function verSaldo():float
        {
            return $this->saldo;
        }

    }

    class ContaPoupanca extends Conta
    {
        public $anversario=6;

        public function aplicar($valor)
        {
            echo"<hr>Aplicação efetuada <b>$valor</b><hr>";
            $this->depositar($valor);
        }
    }

    class ContaPoupancaConjunta extends ContaPoupanca
    {}
    
    $conta=new Conta();
    $conta->deposita(1200);

    $contaPoupanca=new ContaPoupanca();
    $contaPoupanca->depositar(2000);
    $contaPoupanca->aplicar(2000);

    $contaPoupancaConjunta=new ContaPoupancaConjunta();
    $contaPoupancaConjunta->aplicar(100);

    echo'<pre>';
    var_dump($conta);
    var_dump($contaPoupanca);
    echo'<hr>';
    var_dump($contaPoupancaConjunta);
    echo'<hr>';
    echo'Saldo conta conjunta'. $contaPoupancaConjunta->verSaldo();



?>
