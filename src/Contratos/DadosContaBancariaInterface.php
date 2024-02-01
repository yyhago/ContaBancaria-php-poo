<?php

declare(strict_types=1);

namespace App\Contratos;

interface DadosContaBancariaInterface
{
  public function getBanco(): string;
  public function getnomeTitular(): string;
  public function getnumeroAgencia(): string;
  public function getnumeroConta(): string;
}