<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php');
require_once('config.php');

use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Auth\OAuthClient;
use FedExCrossBorder\Geolocation\GeolocationClient;
use FedExCrossBorder\Adapter\GuzzleHttpAdapter;

$ipAddress = '190.233.97.170'; //BUYER IP

// Building an Oauth Client
$credentials  = new Credentials( CLIENT_ID, CLIENT_SECRET, PARTNER_KEY );
$oauthClient  = new OAuthClient( $credentials, API_OAUTH_URL );
$access_token = $oauthClient->clientCredentials();

$geoClient = new GeolocationClient( $credentials, new GuzzleHttpAdapter(), API_URL );

$geo = $geoClient->getCountry($ipAddress);

echo $geo->getCountryCode();
echo $geo->getCountryName();
echo $geo->getCountryCurrency();

?>