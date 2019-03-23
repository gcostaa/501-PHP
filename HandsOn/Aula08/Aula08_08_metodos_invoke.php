<?php

class Usuarios
{   
    //trata um obj como uma função
    public function __invoke()
    {   
        //func_get_args--> pega o @parms da chamada da função
        $parametros = func_get_args();
        echo'<pre>';
        print_r($parametros);
        echo '<hr>Metodo Invoke Executado<hr>';
    }
}

$usuario = new Usuarios();

$usuario('Nome','Email');

?>