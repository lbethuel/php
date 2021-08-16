<?php

$um = [
    'nome1',
    'nome2',
    'nome3',
    'nome4'
];

$dois = [
    10,
    20,
    30,
    40
];

$relaciona = array_combine($um, $dois);

/* echo "<pre>";
var_dump($relaciona);
echo "</pre>"; */

echo $relaciona["nome1"];
