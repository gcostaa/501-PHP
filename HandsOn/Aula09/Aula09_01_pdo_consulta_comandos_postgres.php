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

$query = 'SELECT * FROM usuarios LIMIT 2';

$retorno = $conexao->query($query);

// class Usuarios{
    
//     public $id;
//     public $nome;
//     public $email;
//     public $senha;
// }

//$registro = $retorno->fetchAll(PDO::FETCH_CLASS,'Usuarios');

// FETCH_CLASS->retorna um array com uma lista de usuarios, porem cada
// usuario sera um objeto, ou seja, retorna uma lista que cada indice do
// array seja um objeto

// FETCH_ASSOC->indices do array são o msm que as colunas do banco,
// ou seja array associativo

$registro = $retorno->fetchAll(PDO::FETCH_ASSOC);

foreach ($registro as $registro) {
    
    echo 'Id: '. $registro['id'];
    echo '<br>Nome: '. $registro['nome'];
    echo '<br>Email: '. $registro['email'];
    echo '<br>Senha: '. $registro['senha'];
    echo '<hr>';
}

echo '<pre>';

print_r($registro);

?>