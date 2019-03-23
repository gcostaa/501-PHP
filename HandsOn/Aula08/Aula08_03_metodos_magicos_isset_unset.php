<?php

    class Usuario
    {
        protected $nome;
        protected $email;
        //protected $senha;

        public function __set($atributo,$valor)
        {   
            // property_exists verifica se um obj tem uma propriedade
            // se existir a propriedade nome:
            if(property_exists($this,$atributo))
            {
                $this->$atributo=$valor;
                echo "fazendo o set<br>";
            }else{
                echo "<hr>ERRO a prop $atributo não existe<hr>";
                //exit;
            }
        }

        public function __get($atributo)
        {
            if(property_exists($this,$atributo))
            {
                return $this->$atributo;
                echo "fazendo o get<br>";
            }
        }

        public function __isset($atributo)
        {
            return isset($this->$atributo);

            echo "fazendo isset<br>";
        }

        public function __unset($atributo)
        {   
            echo "fazendo unset<br>";

            unset($this->$atributo);
        }

    }

    $usuario = new Usuario();
    $usuario->nome='Leticia';
    $usuario->email='lele@123.com';
    $usuario->senha='123';

    echo"----------------------------------------------<br>";

    echo "O nome é: {$usuario->nome}<br><br>";    

    //UNSET DESTRUI
    unset($usuario->email);
    //ISSET DESTRUI
    var_dump(isset($usuario->email));

?>