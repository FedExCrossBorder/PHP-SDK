<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'../../vendor/autoload.php');
require_once('../config.php');

use FedExCrossBorder\Connect\ConnectSoapClient;

$connectClient = new ConnectSoapClient(API_WSDL_SANDBOX);

$skus = [
    [
        'productID' => '1',
        'quantity' => 1,
        'price' => 199,
        'dutyId' => '800b0d82c779d0b898eddd74723c50f6',
    ],
];

$params = (object) array(
    'merchantKey' => MERCHANT_KEY,
    'sellerIdKey' => '',
    'language' => 'en',
    'privateIndividuals' => '',
    'items' => $skus,
    'shipmentOriginCountry' => 'US',
    'shipmentDestinationAddress1' => 'Street 1',
    'shipmentDestinationAddress2' => 'Int 1',
    'shipmentDestinationCity' => 'Ontario',
    'shipmentDestinationStateOrProvince' => 'Ontario',
    'shipmentDestinationZip' => '91761',
    'shipmentDestinationCountry' => 'CA',
    'domesticShippingCost' => '10',
    'internationalShippingCost' => '1',
    'internationalShippingName' => 'International shipping',
    'lossAndDamageProtectionFlag' => 1,
    'currency' => 'USD',
    'currencyConversionRate' => '',
    'service' => '',
);

$response = $connectClient->connectLandedCost($params);
var_dump($response);
