<?php

$dsn = 'mysql:host=localhost;dbname=aula_pdo';
$user = 'developer';
$pass = '4linux';

$conexao = new PDO($dsn, $user, $pass);

// Definindo o modo de erro da classe PDO;

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = 'SELECT * FROM usuarios WHERE id=2';

$retorno = $conexao->query($query);

$registros = $retorno->fetchAll(PDO::FETCH_OBJ);//lista de obj

foreach ($registros as $usuario) {
    echo 'Id: ' . $usuario->id;
    echo '<br>Nome: ' . $usuario->nome;
    echo '<br>Email: ' . $usuario->email;
    echo '<br>Senha: ' . $usuario->senha;
    echo '<hr>';
}

echo '<pre>';

print_r($registros);

?>