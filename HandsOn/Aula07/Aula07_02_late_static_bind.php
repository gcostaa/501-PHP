<?php

    class ClassePai
    {
        protected static $nomeClasse = __CLASS__;

        public static function getNomeClasse()
        {   
            return self::$nomeClasse;
            //return static::$nomeClasse;
        }
    }

    class ClasseFilha extends ClassePai
    {
        protected static $nomeClasse = __CLASS__;
    }

    echo "Nome da classe Pai: ". ClassePai::getNomeClasse();
    echo '<hr>';
    echo "Nome da classe Filha: ". ClasseFilha::getNomeClasse();

    /*ele herdou o metodo mas estabele como classe pai a classe
    na qual o metodo chamado foi definido 
    e não an classe atual. Para isso usa o static*/

?>