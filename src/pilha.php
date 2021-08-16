<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2(); 
    } catch (DivisionByZeroError | RuntimeException $err) {
        echo "<pre>";
        echo $err->getMessage();
        echo "</pre>";
        echo "<pre>";
        echo $err->getLine();
        echo "</pre>";
        echo "<pre>";
        echo $err->getTraceAsString();
        echo "</pre>";
    } 
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $divisao = intdiv(5, 0);
    echo "<pre>";
    echo $divisao;
    echo "</pre>";

    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = 'Valor';
    echo "<pre>";
    echo $arrayFixo;
    echo "</pre>";

    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    //var_dump(debug_backtrace());
    echo 'Saindo da função 2' . PHP_EOL;
}


echo "<pre>";
echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
echo "</pre>";
