<?php

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Auth\OAuthClient;
use FedExCrossBorder\Checkout\CheckoutClient;
use FedExCrossBorder\Checkout\Entity\Cart;

require_once($_SERVER['DOCUMENT_ROOT'] .'../../vendor/autoload.php');
require_once('../config.php');

// Building an Oauth Client
$credentials  = new Credentials(CLIENT_ID, CLIENT_SECRET, MERCHANT_KEY);
$merchantClient = new CheckoutClient(API_CHECKOUT_SANDBOX, new GuzzleHttpAdapter(), $credentials);
$oauthClient = new OAuthClient($credentials);

try{
    $access_token = $oauthClient->clientCredentials();
    $bearer_token = $access_token->getAccessToken();
}catch (HttpException $e) {
    echo 'Unable to get Oauth Client Credentials, please check your API credentials.' . PHP_EOL;
    $bearer_token = '';
}

$checkoutClientWithBearer = new CheckoutClient(API_CHECKOUT_SANDBOX, new GuzzleHttpAdapter(), $credentials);
$checkoutClientWithBearer->setAccessToken($bearer_token);
$checkoutClientWithBearer->setMerchantKey(MERCHANT_KEY);

$checkoutId = 'tzc5bf49dfa0c776';
$cart = ['charge_loss_damage_protection' => true, 'charge_duty_tax' => false,];
$dutyCart = [
    [
        [
            'charge_loss_damage_protection' => true,
            'charge_duty_tax' => false,
            'products' => [
                [
                    'id' => '1',
                    'name' => '576 #2 Pencils',
                    'price' => 40,
                    'quantity' => 1,
                    'duty_id' => '522ff482cc64199ccc5ac19523d2ae14',
                ],
            ],
        ]
    ]
];

$cartUpdate = new Cart($cart);
$cartDutyUpdate = new Cart($dutyCart);

$response = $merchantClient->updateCart($cartUpdate, $checkoutId);
$dutyResponse = $merchantClient->updateCart($cartDutyUpdate, $checkoutId);
var_dump($response);
var_dump($dutyResponse);