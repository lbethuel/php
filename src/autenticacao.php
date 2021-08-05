<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Diretor(
    'Joaoo', 
    new CPF('123.456.789-14'), 
    10000
);

$autenticador->tentarLogin($umDiretor, '1234');