<?php

//singleton->garante que a classe so tenha uma instancia

class Banco
{
    public static $objetos;

    public function conectar()
    {
        echo '<hr>Conectando ao banco<hr>';
        self::$objetos++;
    }
}

class BancoSingleton
{
    public static $objetos;

    public static $conexao;

    //construct private impede que vc faça new
    private function __construct(){}

    public static function getConexao()
    {
        if (!self::$conexao)
        {   
            //o new self controla as instancias
            self::$conexao = new self();

            echo '<hr>Conectando ao banco <hr>';
            self::$objetos++;
        }

        return self::$conexao;
    }
}

$banco = new Banco();
$banco->conectar();

$banco2 = new Banco();
$banco2->conectar();

$banco3 = new Banco();
$banco3->conectar();

echo 'Total Objetos:....'. Banco::$objetos;

var_dump($banco,$banco2,$banco3);

echo '<hr>';

$banco = BancoSingleton::getConexao();

$banco2 = BancoSingleton::getConexao();

$banco2 = BancoSingleton::getConexao();

//$banco4 = new BancoSingleton();

echo 'Total Objetos:....'. BancoSingleton::$objetos;

var_dump($banco,$banco2,$banco3);//,$banco4);

?>