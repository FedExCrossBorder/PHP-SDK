<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'../../vendor/autoload.php');
require_once('../config.php');

use FedExCrossBorder\Connect\ConnectSoapClient;

$connectClient = new ConnectSoapClient(API_WSDL_SANDBOX);

$params = (object) array(
    'merchantKey' => MERCHANT_KEY,
    'sellerIdKey' => '',
    'language' => 'en',
    'orderNumber' => '1', //Conseguir order number correcto
);

$response = $connectClient->connectOrderRemove($params);
var_dump($response);
