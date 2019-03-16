<?php

    trait Validacao
    {
        public function validarCpfCnpj($cpf0rCnpj)
        {
            echo '<hr>Validando cpf/cnpj';
        }

        public function validarCartao($numeroCartao)
        {
            echo '<hr>Validando cartao...';
            
        }

        public function validarDados($dados)
        {
            echo '<hr>Validando os dados...Metodo Trait Validacao';
            
        }
    }   

    trait Banco
    {           
        public function gravar($dados)
        {
            echo '<hr>Gravando dados no banco<hr>';
        }
        
        public function consultar($id)
        {
            echo '<hr>BUscando registro<hr>';
        }

        public function validarDados($dados)
        {
            echo '<hr>Validando os dados...Metodo Trait Banco';
            
        }
    }

    class Vendas
    {
        use Validacao, Banco{

        //eu digo que quero usar o metodo da trait banco ao inves da validacao
        Banco::validarDados insteadof Validacao;

        /*ouuuu,*/
        Banco::validarDados as BValidacao;
        Validacao::validarDados as VValidacao;
       

        }

        public function finalizar($dados)
        {
            $this->validarCartao(1111111111);
            $this->validarCpfCnpj(1111111111);
            $this->validarDados('dados');
            $this->gravar($dados);
        }
    }

    $vendas = new Vendas();

    $vendas->finalizar('dados');
?>