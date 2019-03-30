<?php

namespace Controller;

use Model\UsuariosMapper;
use Model\EntidadeUsuarios;

class UsuariosController
{
    private $mapper;

    private $entidadeUsuario;

    public function __construct()
    {
        $this->mapper = new UsuariosMapper();
        $this->entidadeUsuario = new EntidadeUsuarios();
    }

    public function index()
    {
        $registro = $this->mapper->Listar();
    }

    public function exibir($id)
    {
        $registro = $this->mapper->buscarPorId($id);
        return $registro;
    }

    public function cadastrar()
    {
        if($_POST)
        {
            $this->entidadeUsuario->setNome($_POST['nome']);
            $this->entidadeUsuario->setEmail($_POST['email']);
            $this->entidadeUsuario->setSenha($_POST['senha']);

            if ($this->mapper->salvar($this->entidadeUsuario))
            {
                header('location:?rota=usuarios');
            }
        }
    }

    public function excluir($id)
    {
        if ($this->mapper->excluir($id))
        {
            header('location:?rota=usuarios');

        }
    }

    public function alterar($id)
    {
        
    }
}

?>