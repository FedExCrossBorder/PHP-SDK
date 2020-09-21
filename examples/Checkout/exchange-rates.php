<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'../../vendor/autoload.php');
require_once('../config.php');

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Checkout\CheckoutClient;

// Building an Oauth Client
$credentials  = new Credentials(CLIENT_ID, CLIENT_SECRET, MERCHANT_KEY);
$checkoutClient = new CheckoutClient(API_CHECKOUT_SANDBOX, new GuzzleHttpAdapter(), $credentials);

$from = 'PEN';
$to = 'USD';

$response = $checkoutClient->getExchangeRates($from, $to);
var_dump($response);