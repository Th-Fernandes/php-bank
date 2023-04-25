<?php
require_once 'classes/cashIn.php';
require_once 'classes/cashOut.php';
require_once 'data/currentAccounts.php';


$cashIn = new CashIn(amount: 100, depositorCpf: "123.456.789-00", depositedCpf: "987.654.321-00");
$message = $cashIn->setBalanceDiff();


// echo "<p style='color: red; font-size: 64px; font-weight: bold;'>{$message} </p>"s;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP BANK</title>
</head>
<body>
  <h1><?= $message  ?></h1>
</body>
</html>