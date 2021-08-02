<?php

function sacar($conta, float $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
};


function depositar($conta, $valorADepositar)
{

    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }

    return $conta;
};

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

function titularComLetrasMaisculas (&$conta)
{
    $conta['titulas'] = mb_strtoupper($conta['titulas']);
}

?>