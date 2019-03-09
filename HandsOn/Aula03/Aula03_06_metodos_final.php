<?php

    class log
    {   
        //public function escrever($dados)
        public final function escrever($dados){
            echo"<hr>Gerando Log....<br><br>$dados<br><br><hr>";
        }
    }

    class LOgAlterado extends log
    {
        /*public function escrever($dados){
            echo "<hr>Gerando LOg.....<hr>";
        }*/
    }

    $log = new LOgAlterado();a
    $log->escrever('teste');

?>