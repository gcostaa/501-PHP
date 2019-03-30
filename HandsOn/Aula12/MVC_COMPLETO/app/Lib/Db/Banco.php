<?php

namespace Lib\Db;

class Banco
{
    private $dsn = 'mysql:host=localhost;dbname=aula_pdo';
    private $user = 'developer';
    private $pass = '4linux';

    public function conectar()
    {   
        // pois a classe pdo é do core do php, ou seja ela esta no namespace raiz
        // e não dentro de namespace lib\db

        $pdo = new \PDO($this->dns,$this->user,$this->pass);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}

?>