<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    public function __construct(
        string $nome,
        CPF $cpf,
        string $cargo,
        $salario
    ) {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0){
            echo "Aumento deve ser positivo";
            return;
        }
        $this->salario += $valorAumento;
    }

    public function calculaBonificacao()
    {
        return $this->salario * 0.1;
    }
}
