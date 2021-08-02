<?php

namespace Alura\Banco\Modelo;
use Alura\Banco\Modelo\CPF;

//require_once './CPF.php';

class Pessoa
{
    public function __construct(
        protected string $nome,
        private CPF $cpf
    ) {
        $this->validaNomeTitular($nome);
    }

    public function recuperaNome()
    {
        return $this->nome;
    }

    public function recuperaCpf()
    {
        return $this->cpf->recuperaNumero();
    }

     protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    } 
}
