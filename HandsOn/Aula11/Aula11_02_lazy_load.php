<?php

class Banco
{
    protected $conn;

    public function getConn()
    {
        if (!isset($this->conn))
        {
            $this->conn = new PDO('mysql:host=localhost;dbname=aula_pdo',
            'developer','4linux');
        }

        return $this->conn;
    }
}

class Clientes
{
    protected $banco;

    public function __construct(Banco $banco = null)
    {
        $this->banco = $banco;
    }

    public function getBanco()
    {
        if (!isset($this->banco))
        {
            $this->banco = new Banco();
        }

        return $this->banco;
    }
}

$banco = new Banco();

$conexao = $banco->getConn();
$conexao2 = $banco->getConn();

echo '<pre>';
echo '<hr>';
var_dump($conexao);
echo '<hr>';
var_dump($conexao2);

$clientes = new Clientes();

echo '<hr>';

var_dump($clientes->getBanco()->getConn());

?>