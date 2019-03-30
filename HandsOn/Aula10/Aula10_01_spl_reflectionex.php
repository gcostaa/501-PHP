<?php

    class Conta
    {
        protected $saldo = 0;

        public function depositar($valor)
        {
            $this->saldo += $valor;
        }

        public function sacar($valor)
        {
            $this->saldo -= $valor;
        }
    }

    echo '<h1>Reflection Conta</h1>';

    $reflection = new ReflectionClass('Conta');

    echo '<pre>';
    print_r($reflection->getMethods());
    echo '<hr>';
    print_r($reflection->getProperties());
    echo '<hr>';

    echo '<h1>Reflection PDO</h1>';


    $reflectionPDO = new ReflectionClass('PDO');

    echo '<pre>';
    print_r($reflectionPDO->getMethods());
    echo '<hr>';
    print_r($reflectionPDO->getProperties());
    echo '<hr>';

?>