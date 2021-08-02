<?php

namespace Alura\Banco\Modelo;

require_once 'Cpf.php';
require_once 'Pessoa.php';

class Funcionario extends Pessoa
{
    public function __construct(
        public string $nome,
        public CPF $cpf,
        public string $cargo,
        //public Pessoa $validaNomeTitular
    ) {
        parent::__construct($nome, $cpf);
    }

    public function recuperaCargo()
    {
        return $this->cargo;
    }   
    
    public function alteraNome(string $nome)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}
