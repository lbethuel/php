<?php

namespace Alura\Banco\Service;

use Alura\Banco\Autenticavel;
use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador extends Autenticavel
{
    public function tentarLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)){
            echo "Usuário logado no sistema";
        } else {
            echo "Senha incorreta.";
        }
    }
}