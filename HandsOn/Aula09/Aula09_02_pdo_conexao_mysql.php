<?php

// driver de conexao
// host é o end do servidor
// dbname é o banco

$dsn = 'mysql:host=localhost;dbname=aula_pdo';
$user = 'developer';
$pass = '4linux';

$conexao = new PDO($dsn,$user,$pass);

//definindo o modo de erro da classe pdo

$conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

var_dump($conexao);

?>