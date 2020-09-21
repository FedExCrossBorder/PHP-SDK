<?php

namespace FedExCrossBorder\Tracking;

use FedExCrossBorder\AbstractFedExCrossBorder;
use FedExCrossBorder\Adapter\AdapterInterface;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\ConfigTrait;

/**
 * Class TrackingClient
 * @package FedExCrossBorder\Tracking
 */
class TrackingClient extends AbstractFedExCrossBorder
{
    use ConfigTrait;

    /**
     * TrackingClient constructor.
     * @param Credentials|null $credentials
     * @param AdapterInterface|null $adapter
     * @param null $apiUrl
     * @param array $config
     */
    public function __construct(Credentials $credentials = null, AdapterInterface $adapter = null, $apiUrl = null, array $config = array())
    {

        if (!$apiUrl) {
            $apiUrl = $this->getTrackingApiUrl();
        }

        parent::__construct($credentials, $adapter, $apiUrl, $config);
    }

    /**
     * @param string $email
     * @return string
     */
    public function getOrders($email)
    {
        $email = urlencode($email);
        $content = $this->adapter
            ->get(
                sprintf("%s/v1/tracking/numbers/customer/%s", $this->apiUrl, $email)
            );

        return $content;
    }

    /**
     * @param boolean $orderId
     * @return string
     */
    public function getOrderActivities($orderId)
    {
        $orderId = urlencode($orderId);
        $content = $this->adapter
            ->get(
                sprintf("%s/v1/tracking/crossborder/%s", $this->apiUrl, $orderId)
            );

        return $content;
    }

    /**
     * @param $trackingNumber
     * @return string
     */
    public function getBoxItems($trackingNumber)
    {
        $trackingNumber = urlencode($trackingNumber);
        $content = $this->adapter
            ->get(
                sprintf("%s/v1/tracking/items/%s", $this->apiUrl, $trackingNumber)
            );

        return $content;
    }

    /**
     * @param string $trackingNumber
     * @return string
     */
    public function getPackageItems($trackingNumber)
    {
        $trackingNumber = urlencode($trackingNumber);
        $content = $this->adapter
            ->get(
                sprintf("%s/v1/tracking/package/items/%s", $this->apiUrl, $trackingNumber)
            );

        return $content;
    }
}
