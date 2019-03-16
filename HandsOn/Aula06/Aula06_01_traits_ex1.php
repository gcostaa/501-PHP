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

    abstract class Conta
    {
        use Operacoes;

        protected $saldo;
    }

?>