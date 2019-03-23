<?php

class Usuarios
{
    protected $nome;
    protected $email;

    public function atribuir($atributo,$valor)
    {
        $atributo = strtolower($atributo);

        if(property_exists($this, $atributo))
        {
            $this->$atributo=$valor;
        }
    }

    public function retornar($atributo)
    {
        $atributo = strtolower($atributo);

        if(property_exists($this, $atributo))
        {
            $this->$atributo=$valor;
        }
    }

    public function __call($metodo,$atributos)
    {
        echo "<hr>Metodo $metodo foi chamado, porém ele não existe os seguintes parametros
        foram passados";

        echo '<pre>';
        print_r($atributos);
        echo'<hr>';
    }

    public static function __callStatic($metodo, $atributos)
    {
        echo "<hr>Metodo $metodo foi chamado de forma estatica, porém ele não existe os seguintes parametros
        foram passados";

        echo '<pre>';
        print_r($atributos);
        echo'<hr>';
    }

}


$usuario = new Usuarios();
$usuario->setNome('teste');
Usuarios::listar('jjsfj');

?>