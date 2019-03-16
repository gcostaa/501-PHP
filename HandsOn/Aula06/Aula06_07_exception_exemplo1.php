<?php

class Contas
{
    protected $saldo=0;

    public function sacar($valor)
    {
        if($this->saldo<$valor)
        {
            throw new Exception('Saldo insuficiente',1);//o 1 é o cod do erro
        }

        $this->saldo-=$valor;
        echo "<hr>SAQUE EFETUADO COM SUCESSO: $valor<hr>";
    }

    public function depositar($valor)
    {
        $this->saldo+=$valor;
    }

    public function getSaldo(){
        return $this->saldo;
    }
}

try {
    $conta = new Contas();
    //$conta->depositar(5000);
    $conta->sacar(100);
} catch (Exception $erro){
    echo '<pre>';
    echo "<hr>ERRO<b>{$erro->getCode()}-{$erro->getMessage()}</b><hr>";
    var_dump($erro);
} finally {
    echo 'Saldo atual..........'. $conta->getSaldo();
}



?>