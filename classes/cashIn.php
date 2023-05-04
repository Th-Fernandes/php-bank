<?php
class CashIn {
  public float $amount;
  private string $depositorCpf;
  private string $depositedCpf;

  public function __construct(float $amount, string $depositorCpf, string $depositedCpf) {
    $this->amount = $amount;
    $this->depositorCpf = $depositorCpf;
    $this->depositedCpf = $depositedCpf;
  }

  public function setBalanceDiff(): string 
  {
    $hasErros = $this->hasErrors();

    if(!$hasErros) {
      $GLOBALS['currentAccounts'][$this->depositorCpf]['balance'] -= $this->amount;
      $GLOBALS['currentAccounts'][$this->depositedCpf]['balance'] += $this->amount;
    }

   return "depósito de R$$this->amount foi realizado com sucesso.";
  }

  private function hasErrors(): bool 
  {
    $depositorBalance = $GLOBALS['currentAccounts'][$this->depositorCpf]['balance'];
    if ($this->amount > $depositorBalance) throw new ErrorException('saldo do depositante é insuficiente');
    if($this->amount <= 0) throw new ErrorException('o depósito deve ser maior que zero.');

    return false;
  }
}