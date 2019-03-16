<?php

//singleton->garante que a classe so tenha uma instancia

class Banco//não implementa singleton
{
    public static $objetos;

    public function __construct()
    {
        self::$objetos++;

    }

    public function conectar()
    {
        echo '<hr>Conectando ao banco<hr>';
        //self::$objetos++;
    }

    public function getObj(){
        self::$objetos;
    }
}

class BancoSingleton
{
    private static $objetos;

    private static $conexao;

    //construct private impede que vc faça new
    private function __construct(){}

    public static function getConexao()
    {   
        //se a conexao não foi estabelecida
        if (!self::$conexao)
        {   
            //o new self controla as instancias
            //criando uma instancia de mim pra mim mesma
            self::$conexao = new self();

            echo '<hr>Conectando ao banco <hr>';
            self::$objetos++;
        }

        return self::$conexao;
    }

    public function getObj(){
        self::$objetos;
    }
}

$banco = new Banco();
$banco->conectar();

$banco2 = new Banco();
$banco2->conectar();

$banco3 = new Banco();
$banco3->conectar();

echo 'Total Objetos:....'. Banco::getObj();

var_dump($banco,$banco2,$banco3);

echo '<hr>';

$banco = BancoSingleton::getConexao();

$banco2 = BancoSingleton::getConexao();

$banco2 = BancoSingleton::getConexao();

//$banco4 = new BancoSingleton();

echo 'Total Objetos:....'. BancoSingleton::getObj();

var_dump($banco,$banco2,$banco3);//,$banco4);

?>