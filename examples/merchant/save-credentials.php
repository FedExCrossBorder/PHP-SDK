<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'../../vendor/autoload.php');
require_once('../config.php');

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Merchant\Entity\CarrierCredentialRequest;
use FedExCrossBorder\Merchant\Entity\CarrierCredentials;
use FedExCrossBorder\Merchant\MerchantClient;

// Building an Oauth Client
$credentials  = new Credentials(CLIENT_ID, CLIENT_SECRET, PARTNER_KEY, MERCHANT_KEY);
$merchantClient = new MerchantClient($credentials, new GuzzleHttpAdapter(), API_SERVICES_SANDBOX);

/**
 * Carrier to be used: [ 1 => DHL, 2 => FedEx, 3 => UPS, 4 => RRD, 5 => USPS, 6 => MANTON, 7 => CANADAPOST ]
 */

$credentials = new CarrierCredentials();
$credentials
    ->setAccountNumber('491235624')
    ->setAccountMeter('103751097')
    ->setAccountPassword('PA6yJeocv8SyoAdY9Gzi4hKej')
    ->setAccountName('FEDEX-MYACCOUNT')
    ->setAccountKey('PddsEWAOPB10Znqp')
    ;

$carrierCredential = new CarrierCredentialRequest();
$carrierCredential
    ->setCarrier(2)
    ->setExpireDate('2018-12-18 00:00:00')
    ->setCredentials($credentials)
    ;


/** @var string $carriersToken */
$carriersToken = $merchantClient->saveCredentials($carrierCredential);
var_dump($carriersToken);

