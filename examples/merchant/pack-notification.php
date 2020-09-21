<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'../../vendor/autoload.php');
require_once('../config.php');

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Merchant\Entity\BoxInfo;
use FedExCrossBorder\Merchant\Entity\BoxItem;
use FedExCrossBorder\Merchant\Entity\ConsignorAddress;
use FedExCrossBorder\Merchant\Entity\PackNotificationRequest;
use FedExCrossBorder\Merchant\Entity\PickupAddress;
use FedExCrossBorder\Merchant\MerchantClient;

// Building an Oauth Client
$credentials  = new Credentials(CLIENT_ID, CLIENT_SECRET, PARTNER_KEY, MERCHANT_KEY);
$merchantClient = new MerchantClient($credentials, new GuzzleHttpAdapter(), API_SERVICES_SANDBOX);

$pickupAddress = new PickupAddress();
$pickupAddress
    ->setCompanyName('test')
    ->setAddress1('test')
    ->setAddress2('test 2')
    ->setCity('Mex')
    ->setState('Mex')
    ->setZipCode('54605')
    ->setCountry('MX')
    ->setPhone('534534534')
    ->setTaxId('as123123')
    ;

$consignorAddress = new ConsignorAddress();
$consignorAddress
    ->setCompanyName('test')
    ->setAddress1('test')
    ->setAddress2('test 2')
    ->setCity('Mex')
    ->setState('Mex')
    ->setZipCode('54605')
    ->setCountry('MX')
    ->setPhone('534534534')
    ->setTaxId('as123123')
;

$item = new BoxItem();
$item
    ->setProductId('00-06')
    ->setCoo('CO')
    ;

$boxInfo = new BoxInfo();
$boxInfo
    ->setBoxDimUom('CM')
    ->setBoxWeight('5')
    ->setBoxWeightUom('KG')
    ->setBoxLength('15')
    ->setBoxWidth('15')
    ->setBoxHeight('10')
    ->setItems([$item])
    ;

$packNotificationRequest = new PackNotificationRequest();
$packNotificationRequest
    ->setInsure(true)
    ->setCarrierToken('a202713e84904296d33cd143ae08b53a')
    //->setRetailerOrderNumber('xxyyyzzz11')
    ->setFxcbOrderNumber('1000543532')
    ->setTransitMethodCode('FDX-IE')
    ->setInsureAmount(1.0)
    ->setQtyBoxes(3)
    ->setLabelFormat('PNG')
    ->setPickupAddress($pickupAddress)
    ->setConsignorAddress($consignorAddress)
    ->setBoxesInfo([$boxInfo])
    ;


/**
 * To create a full or partial order shipment with one or more items, this endpoint is required.
 * This informs FedEx Cross Border of the contents of the shipmen
 * so that proper shipping documentation and shipping labels can be generated for that specific shipment.
 */
$packNotification = $merchantClient->createPackNotification($packNotificationRequest);
var_dump($packNotification);


/**
 * This endpoint will return a list of necessary shipping documents for a specific pack-notification.
 * The list will include URLs to the FedEx Cross Border repository where the documents can be retrieved.
 * Necessary documents will include(but are not limited to) Commercial Invoices and Airway Bills.
 * The included necessary documents may vary depending on shipping and destination countries.
 */
$idPackNotification = '1233';
$rs = $merchantClient->getPackNotification($idPackNotification);
var_dump($rs);

/**
 * This endpoint is required to make modifications to a previously generated pack-notification
 * that has not been shipped. You can only issue cancel-pack notifications for pack-notifications
 * that have not been shipped.
 * Issuing a cancel-pack notification will remove all the items from the specified pack-notification
 * and place them back into your collection of items awaiting shipment.
 */
$idPackNotification = '1233';
$rs = $merchantClient->cancelPackNotification($idPackNotification);
var_dump($rs);
