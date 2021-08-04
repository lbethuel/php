<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function percentulTarifa(): float
    {
        return 0.05;
    }

    public function transfere(float $valorATransferir, $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}