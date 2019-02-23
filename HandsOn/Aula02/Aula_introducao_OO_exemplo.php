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

     $conta1 = new Conta();
     $conta2 = new Conta();

     $conta1->titular="Gustavo Costa";
     $conta2->titular="Paula";

     $conta1->depositar(500);
     $conta2->depositar(1000);

     echo '<pre>';
     var_dump($conta1);
     echo'<hr>';
     var_dump($conta2);

     echo'<hr>';

     echo 'Saldo Atual em conta1: '.$conta1->verSaldo();

     echo'<hr>';
     
     echo 'Saldo Atual em conta1: '.$conta2->verSaldo();

     echo'<hr>';
     $conta1->sacar(200);
     $conta2->sacar(400);

     echo'<hr>';

     echo 'Saldo Atual em conta1: '.$conta1->verSaldo();

     echo'<hr>';
     
     echo 'Saldo Atual em conta1: '.$conta2->verSaldo();

     echo'<hr>';

     echo 'Titular conta1: '.$conta1->titular;

     echo'<hr>';
     
     echo 'Titular conta1: '.$conta2->titular;

     echo'<hr>';

?>