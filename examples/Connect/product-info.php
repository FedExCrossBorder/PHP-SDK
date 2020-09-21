<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'../../vendor/autoload.php');
require_once('../config.php');

use FedExCrossBorder\Connect\ConnectSoapClient;

$connectClient = new ConnectSoapClient(API_WSDL_SANDBOX);


$params =
    [
        'merchantKey' => MERCHANT_KEY,
        'language' => 'en',
        'items' =>
            [
                [
                    'productID' => '1',
                    'description' => 'test',
                    'url' => 'http://dev.magento4.com/index.php/jeanneret-women-s-austen-white-leather-stainless-steel-austrian-crystal-accented-dial-watch.html',
                    'imageUrl' => 'http://dev.magento4.com/media/catalog/product/cache/0/image/265x/9df78eab33525d08d6e5fb8d27136e95/b/9/b9f87f04869ee3cc09de3ff4b36a7fdf.jpg',
                    'price' => 199,
                    'countryOfOrigin' => 'US',
                    'hsCode' => 0,
                    'itemValuationCurrency' => 'USD',
                    'eccn' => '',
                    'hazFlag' => '',
                    'licenseFlag' => '',
                    'importFlag' => '',
                    'productType' => '',
                    'unitWeight' => 'KG',
                    'unitDimension' => 'CM',
                    'itemInformation' =>
                        [
                            [
                                'l' => '10',
                                'w' => '10',
                                'h' => '10',
                                'wt' => 0.5000
                            ]
                        ]
                ]
            ]
    ];



$productInfo = $connectClient->connectProductInfo($params);
var_dump($productInfo);
