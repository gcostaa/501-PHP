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
    }

    class Vendas
    {
        use Validacao, Banco;

        public function finalizar($dados)
        {
            $this->validarCartao(1111111111);
            $this->validarCpfCnpj(1111111111);
            $this->gravar($dados);
        }
    }

    $vendas = new Vendas();

    $vendas->finalizar('dados');
?>