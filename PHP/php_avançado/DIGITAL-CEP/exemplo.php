<?php


require_once "vendor/autoload.php";

use Luish\DigitalCep\Search;

$busca = new Search();

$resultado = $busca->getAdressFromZipCode('19500000');

print_r($resultado);
