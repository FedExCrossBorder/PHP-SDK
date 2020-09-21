<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'../../vendor/autoload.php');
require_once('../config.php');

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Auth\OAuthClient;
use FedExCrossBorder\Currency\CurrencyClient;

// Building an Oauth Client
$credentials  = new Credentials( CLIENT_ID, CLIENT_SECRET, PARTNER_KEY );
$oauthClient  = new OAuthClient( $credentials, API_OAUTH_URL );
$access_token = $oauthClient->clientCredentials();
$tracking = new \FedExCrossBorder\Tracking\TrackingClient($credentials, new GuzzleHttpAdapter());
$response = $tracking->getOrders("Suhrwilson@ymail.com");