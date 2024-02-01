<?php

declare(strict_types=1);

namespace App;

class ContaBancaria
{

  private string $banco;
  private string $nomeTitular;
  private string $numeroAgencia;
  private string $numeroConta;
  private float $saldo;

  public function __construct(
    string $banco,
    string $nomeTitular,
    string $numeroAgencia,
    string $numeroConta,
    float $saldo
  )
  {
    $this->banco = $banco;
    $this->nomeTitular = $nomeTitular;
    $this->numeroAgencia = $numeroAgencia;
    $this->numeroConta = $numeroConta;
    $this->saldo = $saldo;
  }

  public function depositar(float $valor): string
  {
    $this->saldo += $valor;
    return 'Deposito de R$ ' . number_format($valor, 2, ',', '') . 'realizado';
  }

  public function sacar(float $valor): string
  {
    $this->saldo -= $valor;
    return 'Saque de R$ ' . number_format($valor, 2, ',', '') . 'realizado';
  }

  public function obterSaldo(): string
  {
    return 'Seu Saldo Atual é de R$ ' . number_format($this->saldo, 2, ',', '');
  }



  public function getBanco(): string
  {
      return $this->banco;
  }

  public function getNomeTitular(): string
  {
    return $this->nomeTitular;
  }

  public function getnumeroAgencia(): string
  {
    return $this->numeroAgencia;
  }

  public function getnumeroConta(): string
  {
    return $this->numeroConta;
  }

  public function getsaldo(): float
  {
    return $this->saldo;
  }
}
