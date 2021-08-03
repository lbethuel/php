<?php

namespace Alura\Banco\Modelo;

class Endereco
{
    public function __construct(
        string $cidade, 
        string $bairro, 
        string $rua, 
        string $numero
        ){}

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}
