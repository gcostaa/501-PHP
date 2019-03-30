<?php

    //Wrapper
    class Usuarios implements ArrayAccess


    {
        private $usuarios = [];

        //offset representa a propriedade atual que estou oercorrendo
        public function offsetExists($offset)
        {
            return isset($this->usuarios[$offset]);
        }

        //obtem valor
        public function offsetGet($offset)
        {
                return $this->usuarios[$offset];
            
        }

        //define valor
        public function offsetSet($offset,$value)
        {
           if(!isset($offset))
           {
               return $this->usuarios[]=$value;
           }
        }

        //destrui a propriedade
        public function offsetUnset($offset)
        {
            unset($this->usuarios[$offset]);
        }

        public function percore()
        {
            foreach ($this as $atributo => $valor)
            {
                echo "Atributo<br>";
                echo "Valor: $valor";
                echo '<hr>';
            }
        }

    }

    class Usuario
    {
        public $nome;
        public $email;
        public $senha;

        public function __construct($nome,$email,$senha)
        {
            $this->nome=$nome;
            $this->email=$email;
            $this->senha=$senha;

        }

        public function getNome()
        {
            return $this->nome;
        }


        public function getEmail()
        {
            return $this->email;
        }


        public function getSenha()
        {
            return $this->senha;
        }
    }

    $usuario = new Usuarios();

    $usuario[] = new Usuario("Carol 1","email1","1");
    $usuario[] = new Usuario("Carol 2","email2","2");
    $usuario[] = new Usuario("Carol 3","email3","3");
    $usuario[10] = new Usuario("Carol 10","email10","10");

    echo "<pre>";

    var_dump($usuario[10]);

    echo "<hr>";

    echo "Nome Usuario - ".$usuario[10]->getNome();
    echo "<br>Email Usuario - ".$usuario[10]->getEmail();
    echo "<br>Senha Usuario - ".$usuario[10]->getSenha();

    echo "<hr>";

    echo "<pre>";

    print_r($usuario);

?>