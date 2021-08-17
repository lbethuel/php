<?php

namespace Alura\Banco\Modelo\Conta;

use DomainException;

class SaldoInsuficienteException extends DomainException
{
    public function __construct($valorSaque, $saldoAtual)
    {
        $message = "Você tentou sacar $valorSaque, mas tem apenas $saldoAtual em conta.";
        parent:: __construct($message);
    }
}
