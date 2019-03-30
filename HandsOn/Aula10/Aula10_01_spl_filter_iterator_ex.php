<?php

    class FiltroNumero extends FilterIterator
    {
        public function accept()
        {
            $valor = $this->getInnerIterator()->current();

            return !($valor%2);
        }
    }

$teste = array();

for ($i=0; $i < 100; $i++) { 

   array_push($teste,rand(0,100));
}

$objArray = new ArrayIterator($teste);

$numero = new FiltroNumero($objArray);

foreach ($numero as $numero)
{
    echo "$numero<br>";
}


?>