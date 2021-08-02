<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private $saldo;
    private $numeroDeContas = 0; 

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

       /*  self::$numeroDeContas++; */
    }
    

    public function saca($valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo Indisponível";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar)
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferir($valorATransferir, Conta $contaDestino)
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponivel";
            return;
        }
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo()
    {
        return $this->saldo;
    }

 public static function getNumeroDeContas()
    {
        return self::$numeroDeContas;
    }

    public function recuperaNomeTitular()
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular()
    {
        return $this->titular->recuperaCpf();
    }
}



