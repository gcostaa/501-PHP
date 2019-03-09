<?php

interface ContasInterface
{

    public function sacar($valor);

    public function depositar($valor);

    public function verSaldo();
}

interface LoginInterface
{

    public function gerarLog();
}

abstract class ContasAbstract implements ContasInterface, LoginInterface
{

    public $saldo=0;
    public $titular;

    public function sacar($valor)
    {
        if($valor<=$this->saldo){

            $this->saldo-=$valor;

        }else{
            echo "Saldo insuficiente...<hr>";
        }
        return $this->saldo;
    }

    public function depositar($valor)
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