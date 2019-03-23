<?php

$dsn = 'mysql:host=localhost;dbname=aula_pdo';
$user = 'developer';
$pass = '4linux';

$conexao = new PDO($dsn, $user, $pass);

// Definindo o modo de erro da classe PDO;

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "INSERT INTO usuarios(nome,email,senha)
VALUES('Maria','mari.com','123')";

$conexao->beginTransaction();

try{

    for($x = 0; $x <= 5; $x++)
    {
        $conexao->exec($query);

        echo 'INSERIU<br>';
    }
    $conexao->commit();

    
}catch(PDOException $e){

    rollback();
    echo "Erro: {$e->getMessage()}";
}

?>