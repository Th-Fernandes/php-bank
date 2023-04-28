<?php

class CurrentAccount {
  private string $cpf;
  private string $holder;
  private float $balance = 100;
  function __construct(string $cpf, string $holder) 
  { 
    $this->cpf = $cpf;
    $this->holder = $holder;
  }

  public function getBalance(): float 
  {
    return $this->balance;
  }
}