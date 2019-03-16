<?php

    trait Validacao
    {
        public function validarCpfCnpj($cpf0rCnpj)
        {
            echo '<hr color="#000000">Validando cpf/cnpj';
        }

        public function validarCartao($numeroCartao)
        {
            echo '<hr color="#000000">Validando cartao...';
            
        }

        public function validarDados($dados)
        {
            echo '<hr color="#000000">Validando os dados...Metodo Trait Validacao';
            
        }
        public abstract function metodoAbstrato($parametro);
    }   

    trait Banco
    {       
        public $nomeBanco='contas';

        public function gravar($dados)
        {
            echo '<hr color="#000000">Gravando dados no banco<hr>';
        }
        
        public function consultar($id)
        {
            echo '<hr color="#000000">BUscando registro<hr>';
        }

        public function validarDados($dados)
        {
            echo '<hr color="#000000">Validando os dados...Metodo Trait Banco';
            
        }
    }

    trait TodasAsTraits
    {
        use Validacao, Banco
        {
            Banco::validarDados insteadOf Validacao;
        }

        public function metodoAbstrato($parametro)
        {
            echo '<hr color="#000000">Metodo Implementado';
        }
    }

    class Vendas
    {
        
        use TodasAsTraits;

        public function finalizar($dados)
        {
            $this->validarCartao(1111111111);
            $this->validarCpfCnpj(1111111111);
            $this->validarDados('dados');
            $this->gravar($dados);
            $this->metodoAbstrato('teste');
        }

        public function getNomeBanco(){
            return $this->nomeBanco;
        }
    }

    $vendas = new Vendas();

    $vendas->finalizar('dados');

    echo '<hr width="300" align="left" color="#000000">';
    echo '<pre>';
    echo "Nome do banco:<br>{$vendas->getNomeBanco()}";
    var_dump($vendas);

?>
