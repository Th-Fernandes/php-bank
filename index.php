<?php
require_once 'classes/cashIn.php';
require_once 'classes/cashOut.php';
require_once 'data/currentAccounts.php';

// cashOut(amount: 400, account: $currentAccounts['987.654.321-00']);

// cashIn(amount: 200, depositorCpf: "123.456.789-00", depositedCpf: "987.654.321-00"); 

$cashIn = new CashIn(amount: 10000, depositorCpf: "123.456.789-00", depositedCpf: "987.654.321-00");
$cashIn->setBalanceDiff();
var_dump($currentAccounts['123.456.789-00']);    
var_dump($currentAccounts["987.654.321-00"]);     