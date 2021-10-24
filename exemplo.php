<?php

use Wead\DigitalCep\Search;

$busca = new Search;

$resultado =  $busca->getAdressFormZipCode('01001000');

print_r($resultado);