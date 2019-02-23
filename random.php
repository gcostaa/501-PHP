<?php

$array = array();
/*for ($x = 1; $x <= 100; $x++)
{
    $array[] = $x;
}
*/

for ($x = 1; $x <= 100; $x++)
{
    array_push($array, rand(10,50));
}

echo array_rand($array);

$teste = array("nome"=>'Gustavo', "nome2"=>'Paula');

$teste = array('Gustavo','Paula');

print_r($teste);




?>