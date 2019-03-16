<?php

    trait Operacoes
    {
        public function depositar($valor)
        {
            $this->saldo+=$valor;
        }
        public function sacar($valor)
        {
            $this->saldo-=$valor;
        }

        public function verSaldo()
        {
            $this->saldo;
        }
    }

    abstract class Contas
    {
        use Operacoes;

        protected $saldo;

    }

    class ContaPoupanca extends Contas
    {
        
    }

    class ContaCorrente extends Contas
    {

    }

    $objPoupanca = new ContaPoupanca();
    $objCorrente = new ContaCorrente();

    $objCorrente->depositar(500);
    $objPoupanca->depositar(500);

    echo '<pre>';

    var_dump($objCorrente);
    echo '<hr>';
    var_dump($objPoupanca);
    



?>