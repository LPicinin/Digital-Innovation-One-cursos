<?php

declare(strict_types=1);
class ContaBancaria
{
    /**
     * @var string
     */
    private $banco; //php 7.4 em diante aceita private string $banco;
    /**
     * @var string
     */
    private $nomeTitular;
    /**
     * @var string
     */
    private $numeroAgencia;
    /**
     * @var string
     */
    private $numeroConta;
    /**
     * @var float
     */
    private $saldo;



    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function depositar(float $valor): void
    {
        $this->saldo += $valor;
        //return "Depósito de R$" . $valor . " realizado!";
    }

    public function sacar(float $valor): void
    {
        $this->saldo -= $valor;
        //return "Saque de R$" . $valor . " realizado!";
    }
}

$conta = new ContaBancaria(
    'Banco do Brasil', //banco
    'Luís Henrique Picinin J.', //nome titular
    '8273', //numero agencia
    '573854-10', //numero conta
    300.00, //saldo
);
//var_dump($conta);

echo $conta->getSaldo();

$conta->depositar(200);
echo "<br/>";

echo $conta->getSaldo();
