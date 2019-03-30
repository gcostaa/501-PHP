<?php

    //Wrapper
    class Usuarios implements ArrayAccess, Countable, SeekableIterator


    {
        private $usuarios = [];

        private $index=0;

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

        public function count()
        {
            return count($this->usuarios);
        }

        public function current(){

            return $this->usarios[$this->index];
        }

        public function next(){

            return $this->index++;
        }

        public function valid()
        {
            return isset($this->usuarios[$this->index]);
        }

        public function rewind()
        {
            return $this->index=0;
        }

        public function key()
        {
            return $this->index;
        }

        public function seek($position)
        {
            return $this->usuarios[$position];
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


    // echo "Nome Usuario - ".$usuario[10]->getNome();
    // echo "<br>Email Usuario - ".$usuario[10]->getEmail();
    // echo "<br>Senha Usuario - ".$usuario[10]->getSenha();

    echo "<br>";

    echo "<pre>";   

    echo "qtd: ". count($usuario)."<br>";

    echo "<h1>PROCURA................:</h1>";
    
    print_r($usuario->seek(2));

?>