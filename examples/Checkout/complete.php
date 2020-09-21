<?php

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Checkout\CheckoutClient;

require_once($_SERVER['DOCUMENT_ROOT'] .'../../vendor/autoload.php');
require_once('../config.php');

// Building an Oauth Client
$credentials  = new Credentials(CLIENT_ID, CLIENT_SECRET, MERCHANT_KEY);
$merchantClient = new CheckoutClient(API_CHECKOUT_SANDBOX, new GuzzleHttpAdapter(), $credentials);

$checkoutId = 'tzc5beb05619f60c';
$response = $merchantClient->checkoutComplete($checkoutId);
var_dump($response);