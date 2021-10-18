<?php

require_once "vendor/autoload.php";

use Workspace\DIO\PHP\Search;

$busca = new Search;

$resultado = $busca->getaddressfromzipcode('01001000');

print_r($resultado);