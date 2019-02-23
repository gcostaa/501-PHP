<?php

    abstract class Conta
    //class Conta
    {
        public $saldo=0;
        public $titular;

        public function sacar($valor)
        {
            $this->saldo-=$valor;
        }

        public function depositar($valor)
        {
            $this->saldo+=$valor;
        }

        public function verSaldo():float
        {
            return $this->saldo;
        }
    }

    class ContaPoupanca extends Conta
    {}

    class ContaCorrente extends Conta
    {}

        $contaPoupanca = new ContaPoupanca();
        $contaCorrente = new ContaCorrente();
        //$conta = new Conta();

        echo'<pre>';
        var_dump($contaCorrente);
        echo'<hr>';
        var_dump($contaPoupanca);

        //echo '<hr>'
        //var_drump($conta)
        //echo '<hr>

?>