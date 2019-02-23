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
         $this->saldo.=$valor;
     }

     /**
     * Metodo para fazer um deposito
     * @param float $valor
     */

     public function depositar($valor)
     {
         
     }
}
?>