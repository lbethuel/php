<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;


class Titular extends Pessoa
{
    public function __construct(
        public CPF $cpf,
        public string $nome,
        public Endereco $endereco,
        // public Pessoa $validaNomeTitular
    ) {
        parent::__construct($nome, $cpf);
    }

    public function recuperaEndereco() 
    {
        return $this->endereco;
    }
}
