<?php

namespace Alura\Banco\Modelo;

class Endereco
{
    public $cidade;
    public $bairro;
    public $rua;
    public $numero;

    public function __construct(
        string $cidade,
        string $bairro,
        string $rua,
        string $numero
    ) 
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

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

    public function __toString(): string
    {
        return " {$this->rua}, {$this->numero}, {$this->bairro} - {$this->cidade}";
    }

    public function __get(string $nomeAtributo)
    {
        echo $nomeAtributo; exit();
    }
}
