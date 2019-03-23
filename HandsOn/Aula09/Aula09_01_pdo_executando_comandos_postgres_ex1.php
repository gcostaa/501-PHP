<?php

// driver de conexao
// host é o end do servidor
// dbname é o banco

$dsn = 'pgsql:host=localhost;dbname=aula_pdo';
$user = 'pdo';
$pass = '123456';

$conexao = new PDO($dsn,$user,$pass);

//definindo o modo de erro da classe pdo

$conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$insert = "INSERT INTO usuarios (nome,email,senha)
VALUES ('Paula','leal04.com','123')";

//$update = "UPDATE usuarios set senha = '5454'";

$retorno = $conexao->exec($insert);

echo '<pre>';
var_dump($retorno);

?>