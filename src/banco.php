<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Endereco, CPF};
use Alura\Banco\Modelo\Conta\{ContaPoupanca, Conta, ContaCorrente, Titular};


$endereco = new Endereco('SP', 'um bairro', 'minha rua', '10');

$lucas = new Titular(new CPF('123.456.789-10'), 'Lucas', $endereco);
$primeiraConta = new ContaPoupanca($lucas);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); 

/* echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;  */
echo $primeiraConta->recuperaSaldo();

echo "<pre>";
var_dump($primeiraConta);
echo "</pre>";

/* $bia = new Titular(new CPF('698.549.548-10'), 'Biaaa', $endereco);
$segundaConta = new Conta($bia);
var_dump($segundaConta); */

/* $outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas(); */
