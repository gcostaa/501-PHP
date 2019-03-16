<?php

namespace Bradesco;

class Contas
{
    protected $saldo = 500;
    protected $banco = 'Bradesco';
    
    public function verSaldo()
    {
        return $this->saldo;
    }
    
    public function getBanco()
    {
        return $this->banco;
    }
}

namespace Itau;

//as da apelido para os namespace
//use serve para quando eu quero disponibiliar outros namespaces no me atual
use Bradesco\Contas as ContaBradesco;
use Itau\Contas as ContaItau;

class Contas
{
    protected $saldo = 500;
    protected $banco = 'Itau';
    
    public function verSaldo()
    {
        return $this->saldo;
    }
    
    public function getBanco()
    {
        return $this->banco;
    }  
}


$contaBradesco = new ContaBradesco();

echo 'Nome do Banco: ' . $contaBradesco->getBanco();
$contaItau    = new ContaItau();
echo '<hr>';
echo 'Nome do Banco: ' . $contaItau->getBanco();