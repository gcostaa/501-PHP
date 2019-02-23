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

class ContaCorrente extends Conta
{
    //sobreescrita de sacar
    public function sacar($valor)
    {
        echo"<hr>Saque Efetuado Valor:<b> $valor</b><hr>";
        //O PARENT FAZ REFERENCIA A CLASSE PAI
        parent::sacar($valor);
    }
}

$conta = new Conta();
$conta->depositar(2500);
$conta->sacar();

echo'<hr>';

$contacorrente = new ContaCorrente();
$contacorrente->depositar(2500);
$contacorrente->sacar(800);

echo'<hr>';

echo'Saldo em Conta: '.$conta->verSaldo();

echo'<hr>';

echo'Saldo em Conta Corrente: '.$contacorrente->verSaldo();

?>