<?php

interface ContasInterface
{

    //com type hinting-> determinar o tipo da variavel como por exemplo float dolar_valor
    public function sacar(float $valor):float;

    public function depositar(float $valor):float;

    public function verSaldo():float;
}

abstract class ContasAbstract implements ContasInterface
{

    public $saldo=0;
    public $titular;

    public function sacar(float $valor):float
    {
        if($valor<=$this->saldo){

            $this->saldo-=$valor;

        }else{
            echo "Saldo insuficiente...<hr>";
        }
        return $this->saldo;
    }

    public function depositar(float $valor):float
    {
        $this->saldo+=$valor;

        return $this->saldo;
    }

    public function verSaldo():float{

        return $this->saldo;
    }

}

final class ContaCorrente extends ContasAbstract{
        
}

final class ContaPoupanca extends ContasAbstract{
        
}

$conta = new ContaCorrente();

echo "Saldo atual: {$conta->depositar(1000)}<hr>";
echo "Saldo atual: {$conta->sacar(250)}<hr>";
echo "Saldo atual: {$conta->sacar(2000)}<hr>";

?>