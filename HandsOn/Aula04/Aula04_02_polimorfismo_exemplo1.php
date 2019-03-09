<?php

interface ContasInterface
{

    public function sacar(float $valor);

    public function depositar(float $valor);

    public function verSaldo():float;
}

 class ContaCorrente implements ContasInterface
{

    public $saldo=0;

    public function sacar(float $valor)
    {
            $this->saldo-=$valor;
    }

    public function depositar(float $valor)
    {
        $this->saldo+=$valor;
    }

    public function verSaldo():float{

        return $this->saldo;
    }

}

// final class ContaCorrente extends ContasAbstract{
        
// }

class ContaPoupanca implements ContasInterface{

    public $saldo=0;

    public function sacar(float $valor)
    {
        //POLIMORFISMO OCORRE AQUI, QUANDO ESSE SACAR É O MESMO QUE DA INTERFACE POREM COM CONTEUDO DIFERENTE
        echo "<hr>Saque Efetuado: $valor <hr>";
        $this->saldo -=$valor;
    }

    public function depositar(float $valor)
    {
        echo "<hr>Deposito Efetuado: $valor <hr>";
        $this->saldo +=$valor;
    }

    public function verSaldo():float
    {
        return $this->saldo;
    }
        
}

class contaSemInterface
{

}

class Aplicacao
{
    public function aplicar(ContasInterface $conta)
    {
        echo "Ver Saldo: {$conta->verSaldo()}";
    }
}

$contaCorrente = new ContaCorrente();
$contaCorrente->depositar(500);
$contaPouoanca = new ContaPoupanca();
$contaPouoanca->depositar(900);
$contaSemInterface = new contaSemInterface();
$aplicacao = new Aplicacao();
$aplicacao->aplicar($contaPouoanca);

//$aplicacao->aplicar($contaSemInterface);


echo '<hr>';

echo 'É uma instância de contasSemInterface: <br>';
var_dump($contaPouoanca instanceof contaSemInterface);
echo '<br>';

echo 'É uma instância de ContaPoupança: <br>';
var_dump($contaPouoanca instanceof ContaPoupanca);
echo '<br>';

echo 'É uma instância de contasSemInterface: <br>';
var_dump($contaPouoanca instanceof ContasInterface);
echo '<br>';

echo 'É uma instância de contasSemInterface: <br>';
var_dump($contaCorrente instanceof contaSemInterface);
echo '<br>';

echo 'É uma instância de Conta corrente: <br>';
var_dump($contaCorrente instanceof ContaCorrente);
echo '<br>';

echo 'É uma instância de Contas interface: <br>';
var_dump($contaCorrente instanceof ContasInterface);
echo '<br>';

?>