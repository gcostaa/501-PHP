<?php

namespace Fabricas;

class Fabrica
{
    public static function criar(string $classe)
    {
        if (!class_exists($classe))
        {
            throw new Exception("Clase $classe não encontrada");
        }
        return new $classe;
    }
}

?>