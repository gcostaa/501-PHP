<?php

    namespace Model;

    use Lib\Banco;
    use Entites\usuariosEntity;

    class UsuariosModel
    {
        private $banco;
        private $usuario;

        public function __construct(Banco $banco, usuariosEntity $usuario)
        {
            echo '<hr>Classe Usuarisos Model<hr>';

            $this->banco = $banco;
            $this->usuario = $usuario;
        }
    }

?>