<?php

namespace Alura\Banco\Modelo;

class Endereco
{

    public function __construct(
        private $cidade,
        private $bairro,
        private $rua,
        private $numero)
    {}


    public function recuperCidade()
    {
        return $this->cidade;
    }
    public function recuperBairro()
    {
        return $this->bairro;
    }
    public function recuperRua()
    {
        return $this->rua;
    }
    public function recuperNumero()
    {
        return $this->numero;
    }
}