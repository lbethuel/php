<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    
    public function __construct(
        protected string $nome, 
        CPF $cpf)
    {
        $this->validaNomeTitular($nome);
      
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
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
