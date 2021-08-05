<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }

    public function calculaBonificacao(): float
    {
        return 500.0;
    }
}

