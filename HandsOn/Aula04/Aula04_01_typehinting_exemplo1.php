<?php

class Agencia
{
    public $nome;

    public $telefone;

    public function getNome(){

        return $this->nome;
    }

    public function getTelefone(){
        
        return $this->telefone;
    }
}

class Titular
{

    private $nome;
    
    private $celular;

    public function setDados(array $dados)
    {
        $this->nome=$dados['nome'];
        $this->celular=$dados['celular'];

    }

    public function getNome(){
        
        return $this->nome;
    }


    public function getCelular(){
        
        return $this->celular;
    }
}

class Conta
{
    
}

?>