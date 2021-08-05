<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor,  Gerente, Desenvolvedor, EditorVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umDev = new Desenvolvedor(
    'Lucas',
    new CPF('123.456.789-10'),
    1000
);

$umDev->sobeDeNivel();

$umGerente = new Gerente(
    'Biaaa',
    new CPF('123.456.789-11'),
    3000
);

$umDiretor = new Diretor(
    'Mariaa',
    new CPF('125.456.789-12'),
    5000
);

$umEditor = new EditorVideo(
    'Caioo',
    new CPF('123.456.789-13'),
    2000
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($umDev);
$controlador->adicionaBonificacao($umGerente);
$controlador->adicionaBonificacao($umDiretor);
$controlador->adicionaBonificacao($umEditor);


echo $controlador->recuperaTotal();