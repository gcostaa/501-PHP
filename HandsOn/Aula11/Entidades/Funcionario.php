<?php

namespace Entidades;

class Funcionario extends Pessoa
{
    public $cargo;
    public $setor;
    public $encarregado;


    public function salvar()
    {
        echo '<hr>Salvado Funcionários<hr>';
    }
}

?>