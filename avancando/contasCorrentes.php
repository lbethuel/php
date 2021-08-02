<?php

$contas1 = [
    'titulas' => 'Lucas',
    'saldo' => 1000
];

$contas2 = [
    'titulas' => 'Maria',
    'saldo' => 10000
];

$contas3 = [
    'titulas' => 'Junior',
    'saldo' => 300
];

$contaCorrente = [$contas1, $contas2, $contas3];

for ($i = 0; $i < count($contaCorrente); $i++){
    echo $contaCorrente[$i]['saldo'] . PHP_EOL;
}
