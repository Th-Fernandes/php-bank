<?php
function cashOut( float $amount, array &$account): void 
{
  if($amount > $account['balance']) {
    throw new ErrorException('não é possível sacar um valor maior que seu balanço');
  }
  
  $account['balance'] -= $amount;
}