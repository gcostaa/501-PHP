<?php

namespace Model;

use Lib\Db\TableGateway;

class UsuariosMapper
{
    protected $tabelaGateway;

    public function __construct()
    {
        $this->tabelaGateway = new TableGateway('usuarios');
    }

    public function salvar(EntidadeUsuarios $usuario)
    {
        $dados = [
            'nome' => $usuario->getNome(),
            'email' => $usuario->getEmail(),
            'senha' => $usuario->getSenha(),
        ];

        if($usuario->getId()==null)
        {
            return $this->tabelaGateway->inserir($dados);
        }

        return $this->tabelaGateway->alterar($dados,$usuario->getId());
    }

    public function buscarPorId($id)
    {
        return $this->tabelaGateway->buscarRegistro("id=$id");
    }

    public function listar()
    {
        return $this->tabelaGateway->listar('*',null,'nome');
    }

    public function excluir($id)
    {
        return $this->tabelaGateway->excluir("id=$id");
    }
}

?>