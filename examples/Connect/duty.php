<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'../../vendor/autoload.php');
require_once('../config.php');

use FedExCrossBorder\Connect\ConnectSoapClient;

$connectClient = new ConnectSoapClient(API_WSDL_SANDBOX);

$skus = [
    [
        'productID' => '1',
        'countryOfOrigin' => 'US',
    ],
];

$params = (object) array(
    'merchantKey' => MERCHANT_KEY,
    'language' => 'en',
    'items' => $skus,
    'shipmentOriginCountry' => 'US',
    'shipmentDestinationCountry' => 'CA',
);

$response = $connectClient->connectDuty($params);
var_dump($response);
