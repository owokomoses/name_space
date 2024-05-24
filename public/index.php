<?php

include_once "../app/PaymentGateway/mpesa/Transaction.php";
include_once "../app/PaymentGateway/paypal/Transaction.php";

use App\PaymentGateway\mpesa\Transaction;
use App\PaymentGateway\paypal\Transaction as PaypalTransaction;

$mpesa = new Transaction();

$paypal = new PaypalTransaction();

var_dump($mpesa);