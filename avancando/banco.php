<?php

require_once 'funcoes.php';

$contaCorrente = [
    '123.456.789-10' => [
        'titulas' => 'Junior',
        'saldo' => 300
    ],
    '123.456.689-11' => [
        'titulas' => 'Maria',
        'saldo' => 10000
    ],
    '123.256.789-12' => [
        'titulas' => 'Lucas',
        'saldo' => 1000
    ]
];


$contaCorrente['123.256.789-12']  = depositar(
    $contaCorrente['123.256.789-12'],
    -1900
);

$contaCorrente['123.456.689-11'] = sacar($contaCorrente['123.456.689-11'], 500);
$contaCorrente['123.456.789-10'] = sacar($contaCorrente['123.456.789-10'], 200);

unset ($contaCorrente['123.456.789-10']);

titularComLetrasMaisculas ($contaCorrente['123.456.689-11']);
titularComLetrasMaisculas ($contaCorrente['123.256.789-12']);

foreach ($contaCorrente as $cpf => $conta) {
    ['titulas' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
       "$cpf {$conta['titulas']} {$conta['saldo']}"
    );
}
