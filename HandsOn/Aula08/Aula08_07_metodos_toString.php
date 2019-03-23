<?php

class Usuarios
{

    public $nome;
    public $email;
    public $senha;

    public function __toString()
    {
        $result = "{
            \"nome\":\"{$this->nome}\",
            \"email\":\"{$this->email}\"
        }";
        return $result;
    }
}

$usuarios = new Usuarios();
$usuarios->nome="Gugs";
$usuarios->email="Gugs.com";
$usuarios->senha="uaua";

echo $usuarios;
    
?>