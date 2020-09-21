<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'../../vendor/autoload.php');
require_once('../config.php');

use FedExCrossBorder\Connect\ConnectSoapClient;

$connectClient = new ConnectSoapClient(API_WSDL_SANDBOX);

$skus = [
    ['productID' => '1'],
];

$params = (object) array(
    'merchantKey' => MERCHANT_KEY,
    'language' => 'en',
    'items' => $skus
);

$response = $connectClient->connectSkuStatus($params);
var_dump($response);
