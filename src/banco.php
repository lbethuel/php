<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;

$endereco = new Endereco('SP', 'um bairro', 'minha rua', '10');

$lucas = new Titular(new CPF('123.456.789-10'), 'Lucas', $endereco);
$primeiraConta = new ContaPoupanca($lucas);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); 

/* echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;  */

echo $primeiraConta->recuperaSaldo();

/* $bia = new Titular(new CPF('698.549.548-10'), 'Biaaa', $endereco);
$segundaConta = new Conta($bia);
var_dump($segundaConta); */

/* $outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas(); */
