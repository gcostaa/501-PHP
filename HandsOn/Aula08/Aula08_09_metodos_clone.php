<?php

    class Usuarios
    {
        public $nome;

        public function __clone()
        {
            echo '<hr>Objeto clonado<hr>';
        }
    }

    $usuario1 = new Usuarios();
    $usuario1->nome="Gustavo";

    //$usuario2=$usuario1;
    $usuario2 = clone $usuario1;

    $usuario2->nome="Daniela";

    echo 'Nome Usuario1..'. $usuario1->nome.'<br>';
    echo 'Nome Usuario2..'. $usuario2->nome.'<br>';

    echo '<pre>';
    var_dump($usuario1);
    echo '<br>';
    var_dump($usuario2);



?>