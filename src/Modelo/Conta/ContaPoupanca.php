<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Conta;

class ContaPoupanca extends Conta
{
    public function saca($valorASacar): void
    {
        $tarifaSaque = $valorASacar * 0.03;

        $valorSaque = $valorASacar + $tarifaSaque;

        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }
}
