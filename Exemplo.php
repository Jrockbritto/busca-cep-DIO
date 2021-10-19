<?php

require_once "vendor/autoload.php";

use buscacepDIO\Search;

$busca = new Search;

$resultado = $busca->getaddressfromzipcode('01001000');

print_r($resultado);
