<?php

    class Usuario implements ArrayAccess
    //class Usuario

    {
        public $id;
        public $nome;
        public $email;
        public $senha;

        public function offsetExists($offset)
        {
            return isset($this->$offset);
        }

        public function offsetGet($offset)
        {
            if(property_exists($this,$offset))
            {
                return $this->$offset;
            }
        }

        public function offsetSet($offset,$value)
        {
            if(property_exists($this,$offset))
            {
                return $this->$offset = $value;
            }
        }

        public function offsetUnset($offset)
        {
            unset($this->$offset);
        }

    }

    $usuario = new Usuario();

    //$usuario->id = 10;
    $usuario['id'] = 20;
    $usuario['nome'] = 'Lucia';
    $usuario['email'] = 'lucia@lucia.com';
    $usuario['senha'] = '1259';

    echo '<pre>';
    print_r($usuario);

    echo '<hr>';

    foreach ($usuario as $atributo => $valor)
    {
        echo "Atributo<br>";
        echo "Valor: $valor";
        echo '<hr>';
    }

?>