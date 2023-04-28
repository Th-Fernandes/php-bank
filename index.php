<?php
require_once 'classes/currentAccount.php';

$account = new CurrentAccount(cpf: '123.456.789-00', holder: 'Thiago Fernandes' );
var_dump($account->getBalance());
?>
