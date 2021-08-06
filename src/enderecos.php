<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEnderco = new Endereco('SP','Interlago', 'Rua de cima', '50');
$outroEndereco = new Endereco('SP','Capao', 'Rua de baixo', '03');

"$umEnderco->rua <BR>";
echo "$umEnderco->bairro <BR>";

echo "$umEnderco <BR>";
echo $outroEndereco;