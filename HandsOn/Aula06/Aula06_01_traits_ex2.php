<?php

    trait Operacoes
    {
        public function depositar($valor)
        {   
            echo '<hr>Metodo da Trait Operacoes<hr>';
            $this->saldo+=$valor;
        }
        public function sacar($valor)
        {
            $this->saldo-=$valor;
        }

        public function verSaldo()
        {
            $this->saldo;
        }
    }

    abstract class Contas
    {
        //use Operacoes;

        protected $saldo;

        public function depositar($valor)
        {   
            echo '<hr>Metodo da classe contas<hr>';
           
        }

    }

    class ContaPoupanca extends Contas
    {
        use Operacoes;

        public function depositar($valor)
        {   
            echo '<hr>Metodo da Classe Poupanca<hr>';
            $this->saldo+=$valor;
        }
    }

    class ContaCorrente extends Contas
    {
        //use Operacoes;

        /*public function depositar($valor)
        {   
            echo '<hr>Metodo da Classe Corrente<hr>';
            $this->saldo+=$valor;
        }*/
    }

    $objPoupanca = new ContaPoupanca();
    $objCorrente = new ContaCorrente();

    $objCorrente->depositar(500);
    $objPoupanca->depositar(500);

    echo '<pre>';

    var_dump($objCorrente);
    echo '<hr>';
    var_dump($objPoupanca);
    



?>