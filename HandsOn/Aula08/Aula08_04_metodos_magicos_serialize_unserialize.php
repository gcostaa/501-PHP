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
           return $this->$atributo;
        }
    }

    public function __call($metodo,$atributos)
    {   
        //pega os tres primeiros caracteres set ou get
        $prefix = substr($metodo,0,3);
        //pega o nome do atributo
        $nomeAtributo = substr($metodo,3);

        switch($prefix)
        {
            case 'set':
            $this->atribuir($nomeAtributo,$atributos[0]);
            break;

            case 'get':
            $this->retornar($nomeAtributo);
            break;
            default:
            echo '<hr>Metodo inválido';
        }
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

$usuario->setNome('Gustavo');
$usuario->setEmail('garruda@mp.com.br');

echo "Nome:" .$usuario->getNome()."<br>";
echo "Email: ".$usuario->getEmail()."<br>";

echo'<hr><pre>';

var_dump($usuario);

?>