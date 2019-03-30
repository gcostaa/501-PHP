<?php

namespace Model;

class EntidadeUsuarios
{
    private $id;
    private $nome;
    private $email;
    private $senha;

    public function setId($id)
    {
        return $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNome($nome)
    {
        return $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setEmail($email)
    {
        return $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setSenha($senha)
    {
        return $this->senha = \crypt($senha);
    }

    public function getSenha()
    {
        return $this->senha;
    }
}

?>