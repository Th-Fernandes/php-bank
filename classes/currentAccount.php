<?php

class CurrentAccount {
  private  string $cpf;
  private string $holder;
  public float $balance = 0;
  function __construct(string $cpf, string $holder) 
  { 
    $this->cpf = $cpf;
    $this->holder = $holder;
  }

  public function getBalance(): float 
  {
    return $this->balance;
  }

  public function cashIn(float $amount) : float
  {
    if( $amount <= 0 ) throw new ErrorException('O deposito deve ser maior que zero.');

    return $this->balance += $amount;
  }

  public function cashOut(float $amount): float 
  {
    if($amount <= 0 or $amount > $this->balance) throw new ErrorException('cashOut error');

    return $this->balance -= $amount;
  }
}