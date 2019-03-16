<?php

class Usuarios
{
    public $nome;
    public $email;

    public static $listaUsuarios = [];

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function salvarUsuario(Usuarios $usuario)
    {
        self::$listaUsuarios[] = $usuario;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function listarUsuario()
    {
        return self::$listaUsuarios;
    }
}

$usuario1 = new Usuarios();
Usuarios::salvarUsuario($usuario1);

$usuario1->setNome('Paula Leal');
$usuario1->setEmail('Paulalindinha@dogustavo.com.br');

$usuario2 = new Usuarios();
Usuarios::salvarUsuario($usuario2);

$usuario2->setNome('Miguel Leal');
$usuario2->setEmail('gueguerebelde@doisdois.com.br');

echo 'Total de Usuarios: '. count(Usuarios::listarUsuario());
echo '<br>';

echo 'Total de Usuarios objeto1: '. count($usuario1->listarUsuario());
echo '<br>';

echo 'Total de Usuarios objeto2: '. count($usuario2->listarUsuario());
echo '<br>';

foreach(Usuarios::listarUsuario() as $usuario)
{
    echo "Nome: {$usuario->getNome()}<br>";
    echo "E-mail:{$usuario->getEmail()}<br>";
}

echo '<hr>';
echo '<pre>';

var_dump($usuario1);

echo '<hr>';
echo '<pre>';

var_dump($usuario2);


?>