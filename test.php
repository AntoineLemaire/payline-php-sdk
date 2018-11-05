<?php

require_once "vendor/autoload.php";

use Payline\PaylineSDK;

$merchandId     = '123456789123456';
$accessKey      = '123456789123456';
$orderRef       = '3-2018-09006649';
$contractNumber = '1234567';

$paylineSDK = new PaylineSDK($merchandId, $accessKey,null,null,    '', '', PaylineSDK::ENV_HOMO);

$aes256Key   = hash('SHA256', $accessKey, true);
$messageUtf8 = utf8_encode($merchandId.';'.$orderRef.';'.$contractNumber);

$encrypted = $paylineSDK->getEncrypt($messageUtf8, $aes256Key);

var_dump($encrypted);
var_dump('finish');

