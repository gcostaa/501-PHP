<?php

$dsn = 'mysql:host=localhost;dbname=aula_pdo';
$user = 'developer';
$pass = '4linux';

$conexao = new PDO($dsn, $user, $pass);

// Definindo o modo de erro da classe PDO;

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE usuarios set nome=?,senha=? WHERE id=?";

$retorno = $conexao->prepare($query);

//execute retorna true ou false já exec não retorna nada

    var_dump($retorno->execute([
        "UPDA..com prepare",
        "51155",
        "1"
    ]
    ));

echo '<hr><pre>';

$select = 'SELECT * FROM usuarios WHERE id > ?';
$select2 = 'SELECT * FROM usuarios WHERE nome like ?';

$pdoSt = $conexao->prepare($select2);

$pdoSt->execute([
    'gu%'
]);

$registro = $pdoSt->fetchAll(PDO::FETCH_ASSOC);

if(isset($registro))
{
    echo 'vazio';
}
print_r($registro);

?>