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

        public function getTitular()
        {
           return $this->titular;
        }

        public function __destruct()
        {
            echo '<hr>Metodo <b>' .__METHOD__ . '</b> executando na classe: <b>' .__CLASS__ .'</b><hr>';
        }
    }

    Class Titular
    {
        public $nome;
        public $cpf;

        public function __destruct()
        {
            echo '<hr>Metodo <b>' .__METHOD__ . '</b> executando na classe: <b>' .__CLASS__ .'</b><hr>';
        }
    }

    $titular = new Titular();
    $titular->nome='Paula';
    $titular->cpf='123456';

    $conta = new Contas($titular);

    unset($titular);

    $titular = new Titular();
    $titular->nome='Paula';
    $titular->cpf='123456';

    echo 'Titular: '.$conta->getTitular()->nome;
    echo '<br>CPF Titular: '.$conta->getTitular()->cpf;


?>