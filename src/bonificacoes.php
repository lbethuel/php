<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor,  Gerente, Desenvolvedor};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Lucas',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionario = new Gerente(
    'Biaaa',
    new CPF('123.456.789-11'),
    3000
);

$duasFuncionaria = new Diretor(
    'Mariaa',
    new CPF('125.456.789-11'),
    5000
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaFuncionario);
$controlador->adicionaBonificacao($duasFuncionaria);


echo $controlador->recuperaTotal();