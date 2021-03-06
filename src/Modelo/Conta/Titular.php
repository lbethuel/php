<?php

namespace Alura\Banco\Modelo\Conta;

require_once 'autoload.php';

use Alura\Banco\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{

    public function __construct(
        CPF $cpf, 
        string $nome, 
        Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}
