<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php');
require_once('config.php');

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Auth\OAuthClient;
use FedExCrossBorder\Currency\CurrencyClient;

// Building an Oauth Client
$credentials  = new Credentials( CLIENT_ID, CLIENT_SECRET, PARTNER_KEY );
$oauthClient  = new OAuthClient( $credentials, API_OAUTH_URL );
$access_token = $oauthClient->clientCredentials();

$currencyClient = new CurrencyClient( $credentials, new GuzzleHttpAdapter(), API_CURRENCY_URL );
$response = $currencyClient->getExchangeRate(PARTNER_KEY);
$arrResponse = json_decode($response, TRUE);

// Below is an example of searching the currency file and extracting
// only the USD to EUR converstion rate. This is to illustrate how the
// json data is organized only. In production you will want to extract
// and save all relevant conversions to avoid the overhead of calling
// individual currencies.
foreach($arrResponse['USD'] as $curr) {
  if($curr['code'] == 'EUR') {
    echo 'USD' . ' to ' . $curr['code'] . ' : ' . $curr['value'] ;
  }
}
?>