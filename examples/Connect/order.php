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
        'dutyId' => '',
    ],
];

$params = (object) array(
    'merchantKey' => MERCHANT_KEY,
    'sellerIdKey' => '',
    'language' => 'en',
    'orderNumber' => '1',
    'landedCostTransactionID' => '4b349a296bc1510bff87bb781f417438',
    'ordersInfo' => [
        [
            'carrier' => '2',
            'trackingNumber' => '',
            'productID' => 'product_1',
            'quantity' => 1,
            'price' => 199,
        ],
        [
            'productID' => 'TEST-2',
            'quantity' => 1,
            'price' => 299,
            'dutyId' => '800b0d82c779d0b898eddd74723c50f6',
        ],
    ],
    'shipToBusiness' => 'COMPANY',
    'shipToFirstName' => 'Rene',
    'shipToLastName' => 'Test',
    'shipToAddress1' => 'Street 1',
    'shipToAddress2' => 'Int 1',
    'shipToAddress3' => '',
    'shipToCity' => 'Ontario',
    'shipToState' => 'Ontario',
    'shipToZip' => '91761',
    'shipToCountry' => 'CA',
    'shipToPhone' => '55463526374',
    'shipToEmail' => 'nortdaniel@gmail.com',
    'shipToTaxID' => '',
    'repackage' => '',
    'dutyPaid' => '',
    'lossAndDamageProtection' => 1,
    'emailCustomerTracking' => 'nortdaniel@gmail.com',
    'sellingStoreName' => 'Store Name',
    'sellingStoreURL' => 'https://www.google.com',
    'sellingStoreURLCS' => '',
    'sellingStoreURLImage' => '',
);

$response = $connectClient->connectOrder($params);
var_dump($response);
