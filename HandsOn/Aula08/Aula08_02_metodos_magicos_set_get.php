<?php

    class Usuario
    {
        protected $nome;
        protected $email;

        public function __set($atributo,$valor)
        {   
            // property_exists verifica se um obj tem uma propriedade
            // se existir a propriedade nome:
            if(property_exists($this,$atributo))
            {
                $this->$atributo=$valor;
            }else{
                echo "<hr>ERRO a prop $atributo nã existe<hr>";
            }
        }

        public function __get($atributo)
        {
            if(property_exists($this,$atributo))
            {
                return $this->$atributo;
            }
        }

    }

    $usuario = new Usuario();
    $usuario->nome='Leticia';
    $usuario->email='lele@123.com';
    

?>