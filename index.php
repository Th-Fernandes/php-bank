<?php
require_once 'classes/currentAccount.php';

$account = new CurrentAccount(cpf: '123.456.789-00', holder: 'Thiago Fernandes' );
$account2 = clone $account;

$account->balance = 900;
$account2->balance = 300;

$account->cashIn(amount: 0.1);
$account->cashOut(amount: -200);
var_dump($account->balance, $account2->balance);
?>
