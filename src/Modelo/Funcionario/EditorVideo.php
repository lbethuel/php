<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class EditorVideo extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 600.0;
    }

}