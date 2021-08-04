<?php

namespace Alura\Banco\Modelo\Funcionario;

class Diretor extends Funcionario
{
    public function calculaBonificacao()
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
} 