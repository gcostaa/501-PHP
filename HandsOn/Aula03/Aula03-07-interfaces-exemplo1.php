<?php

interface ContasInterface
{

    //com type hinting
    public function sacar(float $valor):float;

    public function depositar(float $valor):float;

    public function verSaldo():float;
}

abstract class ContasAbstract implements ContasInterface
{

    public $saldo=0;
    public $titular;

    public function sacar(float $valor):floatval
    {
        if($valor<=$this->saldo){
            
        }
    }

}

?>