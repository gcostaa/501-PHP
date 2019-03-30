<?php

    class Usuario implements ArrayAccess
    //class Usuario

    {
        public $id;
        public $nome;
        public $email;
        public $senha;


        //offset representa a propriedade atual que estou oercorrendo
        public function offsetExists($offset)
        {
            return isset($this->$offset);
        }

        //obtem valor
        public function offsetGet($offset)
        {
            if(property_exists($this,$offset))
            {
                return $this->$offset;
            }
        }

        //define valor
        public function offsetSet($offset,$value)
        {
            if(property_exists($this,$offset))
            {
                return $this->$offset = $value;
            }
        }

        //destrui a propriedade
        public function offsetUnset($offset)
        {
            unset($this->$offset);
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

    $usuario = new Usuario();

    $usuario->id = 10;
    //troca de 10 pra 20
    $usuario['id'] = 20; //aqui verifica, offset existe id? Caso sim, ele vai para o set e atribui
    $usuario['nome'] = 'Lucia';
    $usuario['email'] = 'lucia@lucia.com';
    $usuario['senha'] = '1259';

    echo '<pre>';
    print_r($usuario);

    echo '<hr>';
    $usuario->percore();

    

?>