<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'../../vendor/autoload.php');
require_once('../config.php');

use FedExCrossBorder\Currency\CurrencyClient;


$credentials = new \FedExCrossBorder\Auth\Credentials(
    CLIENT_ID,
    CLIENT_SECRET,
    MERCHANT_KEY
);

$guzzleAdapter = new \FedExCrossBorder\Adapter\GuzzleHttpAdapter();

$currencyClient = new CurrencyClient(
    $credentials,
    $guzzleAdapter,
    API_CHECKOUT_SANDBOX
);

$response = $currencyClient->getExchangeRate();
var_dump($response);