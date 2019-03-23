<?php

$dsn = 'mysql:host=localhost;dbname=aula_pdo';
$user = 'developer';
$pass = '4linux';

$conexao = new PDO($dsn, $user, $pass);

// Definindo o modo de erro da classe PDO;

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "INSERT INTO usuarios(nome,email,senha)
VALUES(?,?,?)";

$retorno = $conexao->prepare($query);

//execute retorna true ou false já exec não retorna nada

for($x = 0; $x < 3; $x++)
{
    var_dump($retorno->execute([
        "gustavo $x",
        "email $x",
        "senha $x"
    ]
    ));
}

//--------------------OU-------------------------

// $query = "INSERT INTO usuarios(nome,email,senha)
// VALUES(:nome,:email,:senha)";

?>