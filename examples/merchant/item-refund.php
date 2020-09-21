<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'../../vendor/autoload.php');
require_once('../config.php');

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Merchant\Entity\BoxItem;
use FedExCrossBorder\Merchant\Entity\CustomRefundRequest;
use FedExCrossBorder\Merchant\Entity\ItemRefundRequest;
use FedExCrossBorder\Merchant\MerchantClient;

// Building an Oauth Client
$credentials  = new Credentials(CLIENT_ID, CLIENT_SECRET, MERCHANT_KEY);
$merchantClient = new MerchantClient($credentials, new GuzzleHttpAdapter(), API_SERVICES_SANDBOX);


/**
 * Use this endpoint to cancel and refund an unshipped item from an order,
 * or to issue a refund for an already shipped item on an order.
 */

$item = new BoxItem();
$item
    ->setProductId('00-06')
    ->setCoo('CO')
;

$itemRefundRequest = new ItemRefundRequest();
$itemRefundRequest
    ->setOrderNumber('1000373636')
    ->setItems([$item])
    ->setChargedTransitCost(1)
    ->setDutiableTransitCost(2)
    ->setUser('fedex user')
    ->setMerchantNote('Cancelado desde x')
    ;

$itemRefund = $merchantClient->refundItem($itemRefundRequest);
var_dump($itemRefund);



/**
 * This endpoint allows you to provide a custom refund to a customer.
 * For example, if you do not want a customer to return an item,
 * but you would like to refund them $10 USD for a damaged item, this is the method to call.
 */
$customRefundRequest = new CustomRefundRequest();
$customRefundRequest
    ->setOrderNumber('1000373636')
    ->setCustomRefundAmount(131.66)
    ->setRefundReasonCode(4)
    ->setUser('Postman')
    ->setMerchantNote('Custom test refund note')
    ;

$customRefund = $merchantClient->customRefund($customRefundRequest);
var_dump($customRefund);
