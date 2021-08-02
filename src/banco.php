<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Endereco;

$endereco = new Endereco('SP', 'Capao', 'Rua 10', '10');

$bethuel = new Titular(new CPF('123.456.789-10'), 'Lucas', $endereco);
$primeiraConta = new Conta($bethuel);

var_dump($primeiraConta);