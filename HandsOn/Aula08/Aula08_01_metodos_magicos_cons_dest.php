<?php

    class Contas
    {
        protected $titular;
        protected $saldo=0;

        public function __construct(Titular $titular)
        {
            echo '<hr>Executando o construtor Automaticamente<hr>';
            $this->titular = $titular;
        }

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

?>