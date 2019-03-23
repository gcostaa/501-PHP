<?php

$dsn = 'mysql:host=localhost;dbname=aula_pdo';
$user = 'developer';
$pass = '4linux';

$conexao = new PDO($dsn, $user, $pass);

// Definindo o modo de erro da classe PDO;

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$insert = "INSERT INTO usuarios(nome,email,senha)
VALUES(:nome,:email,:senha)";

$nome = 'Alfredo';
$email = 'alfredo.com';
$senha = '41fR3d0@D4nT45';

$retorno = $conexao->prepare($insert);

//Representa o tipo de dados SQL CHAR, VARCHAR ou outro tipo de dados de cadeia.
$retorno->bindParam(':nome',$nome,PDO::PARAM_STR,60);
$retorno->bindParam(':email',$nome,PDO::PARAM_STR,100);
$retorno->bindParam(':senha',$nome,PDO::PARAM_STR,100);

var_dump($retorno->execute())

?>