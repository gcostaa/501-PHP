<?php

$objArray = new ArrayIterator([1,2,3,'teste',5,6,7,'teste']);

foreach ($objArray as $valor)
{
    echo "$valor<br>";
}

?>