<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 3/12/18
 * Time: 05:27 PM
 */

namespace FedExCrossBorder;

/**
 * Trait ConfigTrait
 * @package FedExCrossBorder
 */
trait ConfigTrait
{
    /**
     * get config
     */
    public function getConfig()
    {
        return include 'config.php';
    }

    /**
     * get CheckoutApi URL
     * @return mixed
     */
    public function getCheckoutApiUrl()
    {
        $config = $this->getConfig();

        return $config['checkout_url'];
    }

    /**
     * get ConnectApi URL
     * @return mixed
     */
    public function getConnectApiUrl()
    {
        $config = $this->getConfig();

        return $config['connect_url'];
    }

    /**
     * get CurrencyApi URL
     * @return mixed
     */
    public function getCurrencyApiUrl()
    {
        $config = $this->getConfig();

        return $config['currency_url'];
    }

    /**
     * get GeolocationApi URL
     * @return mixed
     */
    public function getGeolocationApiUrl()
    {
        $config = $this->getConfig();

        return $config['geolocation_url'];
    }

    /**
     * get MErchantApi URL
     * @return mixed
     */
    public function getMerchantApiUrl()
    {
        $config = $this->getConfig();

        return $config['merchant_url'];
    }

    /**
     * get MonitoringApi URL
     * @return mixed
     */
    public function getMonitoringApiUrl()
    {
        $config = $this->getConfig();

        return $config['monitoring_url'];
    }

    /**
     * get TrackingApi URL
     * @return mixed
     */
    public function getTrackingApiUrl()
    {
        $config = $this->getConfig();

        return $config['tracking_url'];
    }

    /**
     * get WebappApi URL
     * @return mixed
     */
    public function getWebappApiUrl()
    {
        $config = $this->getConfig();

        return $config['webapp_url'];
    }
}
