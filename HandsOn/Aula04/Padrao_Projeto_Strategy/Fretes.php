<?php

interface FreteInterface
{
    public function buscar($dados);
    public function getValorFrete();
}

abstract class FreteAbstract implements FreteInterface
{
    public $valor;
    public $prazo;

    //Stub->metodo fake para continuar o programa e dps se preocupar cm ele
    public function buscar($dados)
    {
        echo'<hr>Consultando a API dos correios...<hr>';
        $this->valor=50;
        $this->prazo=20;
    }

    public function getValorFrete()
    {
        return $this->valor;
    }

    public function getPrazo()
    {
        return $this->valor;
    }

}

class FretePac extends FreteAbstract
{
    public $tipo='PAC';
}

class FreteSedex extends FreteAbstract
{
    public $tipo='SEDEX';
}
class FreteSedex10 extends FreteAbstract
{
    public $tipo='SEDEX10';
}

?>