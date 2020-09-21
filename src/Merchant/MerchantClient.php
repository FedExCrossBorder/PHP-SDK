<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 30/10/18
 * Time: 12:17 PM
 */

namespace FedExCrossBorder\Merchant;

use FedExCrossBorder\AbstractFedExCrossBorder;
use FedExCrossBorder\Adapter\AdapterInterface;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Checkout\Entity\Cart;
use FedExCrossBorder\Checkout\Entity\Checkout;
use FedExCrossBorder\ConfigTrait;
use FedExCrossBorder\Merchant\Entity\CarrierCredentialRequest;
use FedExCrossBorder\Merchant\Entity\CustomRefundRequest;
use FedExCrossBorder\Merchant\Entity\ItemRefundRequest;
use FedExCrossBorder\Merchant\Entity\PackNotificationRequest;

/**
 * Class MerchantClient
 * @package FedExCrossBorder\Merchant
 */
class MerchantClient extends AbstractFedExCrossBorder
{
    use ConfigTrait;

    const CHECKOUT_ENDPOINT = 'v2/checkout';
    const CREDENTIAL_ENDPOINT = 'v1/save';
    const PACK_NOTIFICATION_ENDPOINT= 'md/v1/pack-notification';
    const DOCUMENTS_ENDPOINT = 'dr/v1/get-documents';
    const ITEM_REFUND_ENDPOINT = 'md/v1/item-refund';
    const CUSTOM_REFUND_ENDPOINT = 'md/v1/custom-refund';

    /**
     * MerchantClient constructor.
     * @param Credentials|null $credentials
     * @param AdapterInterface|null $adapter
     * @param null $apiUrl
     * @param array $config
     */
    public function __construct(
        Credentials $credentials = null,
        AdapterInterface $adapter = null,
        $apiUrl = null,
        array $config = array()
    ) {
        if (!$apiUrl) {
            $apiUrl = $this->getMerchantApiUrl();
        }

        parent::__construct($credentials, $adapter, $apiUrl, $config);
    }

    /**
     * Create a Checkout using a predefined cart object
     *
     * @param Cart $cart
     * @return Checkout
     */
    public function createCheckout(Cart $cart)
    {
        $content = $this->adapter
            ->post(
                sprintf('%s/%s', $this->apiUrl, self::CHECKOUT_ENDPOINT),
                $cart->toJSON(128)
            );

        return new Checkout($content);
    }

    /**
     * @param CarrierCredentialRequest $carrierCredentialsRequest
     *
     * @return string
     */
    public function saveCredentials(CarrierCredentialRequest $carrierCredentialsRequest)
    {
        $content = $this->adapter
            ->post(
                sprintf('%s/%s/%s', $this->apiUrl, 'carrier_credentials', self::CREDENTIAL_ENDPOINT),
                $carrierCredentialsRequest->toJSON(128)
            );

        return $content;
    }

    /**
     * @param PackNotificationRequest $packNotificationRequest
     * @return string
     */
    public function createPackNotification(PackNotificationRequest $packNotificationRequest)
    {
        $content = $this->adapter
            ->post(
                sprintf('%s/%s', $this->apiUrl, self::PACK_NOTIFICATION_ENDPOINT),
                $packNotificationRequest->toJSON(128)
            );

        return $content;
    }

    /**
     * @param string $idPackNotification

     * @return string
     */
    public function getPackNotification($idPackNotification)
    {
        $idPackNotification = urlencode($idPackNotification);
        $content = $this->adapter
            ->get(
                sprintf('%s/%s/%s', $this->apiUrl, self::PACK_NOTIFICATION_ENDPOINT, $idPackNotification)
            );

        return $content;
    }

    /**
     * @param string $idPackNotification
     *
     * @return string
     */
    public function cancelPackNotification($idPackNotification)
    {
        $idPackNotification = urlencode($idPackNotification);
        $content = $this->adapter
            ->delete(
                sprintf('%s/%s/%s', $this->apiUrl, self::PACK_NOTIFICATION_ENDPOINT, $idPackNotification)
            );

        return $content->getContents();
    }

    /**
     * @param ItemRefundRequest $itemRefundRequest
     * @return string
     */
    public function refundItem(ItemRefundRequest $itemRefundRequest)
    {
        $content = $this->adapter
            ->post(
                sprintf('%s/%s', $this->apiUrl, self::ITEM_REFUND_ENDPOINT),
                $itemRefundRequest->toJSON(128)
            );

        return $content;
    }

    /**
     * @param CustomRefundRequest $customRefundRequest
     * @return string
     */
    public function customRefund(CustomRefundRequest $customRefundRequest)
    {
        $content = $this->adapter
            ->post(
                sprintf('%s/%s', $this->apiUrl, self::CUSTOM_REFUND_ENDPOINT),
                $customRefundRequest->toJSON(128)
            );

        return $content;
    }

    /**
     * @param string $idPackNotification
     * @return string
     */
    public function getDocuments($idPackNotification)
    {
        $idPackNotification = urlencode($idPackNotification);
        $content = $this->adapter
            ->get(
                sprintf('%s/%s/%s', $this->apiUrl, self::DOCUMENTS_ENDPOINT, $idPackNotification)
            );

        return $content;
    }

    /**
     * @param string $idPackNotification
     * @param string $idDoc
     * @return string
     */
    public function getDocumentsById($idPackNotification, $idDoc)
    {
        $idPackNotification = urlencode($idPackNotification);
        $idDoc = urlencode($idDoc);

        $content = $this->adapter
            ->get(
                sprintf('%s/%s/%s/%s', $this->apiUrl, self::DOCUMENTS_ENDPOINT, $idPackNotification, $idDoc)
            );

        return $content;
    }
}
