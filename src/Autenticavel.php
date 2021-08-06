<?php

namespace Alura\Banco;

//require_once 'autoload.php';

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}