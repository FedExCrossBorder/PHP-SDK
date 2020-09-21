<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'../../vendor/autoload.php');
require_once('../config.php');

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Merchant\MerchantClient;

// Building an Oauth Client
$credentials  = new Credentials(CLIENT_ID, CLIENT_SECRET, MERCHANT_KEY);
$merchantClient = new MerchantClient($credentials, new GuzzleHttpAdapter(), API_SERVICES_SANDBOX);

/**
 * This endpoint will return a list of necessary shipping documents
 * for a specific pack-notification. The list will include URLs
 * to the FedEx Cross Border repository where the documents can be retrieved.
 * Necessary documents will include(but are not limited to) Commercial Invoices and Airway Bills.
 * The included necessary documents may vary depending on shipping and destination countries.
 */

$idPackNotification = '100';
$idDoc = '2';
$documents = $merchantClient->getDocuments($idPackNotification, $idDoc);
var_dump($documents);
