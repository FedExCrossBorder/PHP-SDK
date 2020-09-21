<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class AvailableLanguages
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property string $confirmation_uri
 * @property boolean $merchant_direct
 * @property boolean $order_complete
 * @property boolean $fcb_shipping_methods
 * @property boolean $custom_shipping_rates
 * @property boolean $merchant_control
 */
class MerchantAttributes extends BaseModel
{
    /**
     * @return string
     */
    public function getConfirmationUri()
    {
        return $this->confirmation_uri;
    }

    /**
     * @param string $confirmation_uri
     * @return $this
     */
    public function setConfirmationUri($confirmation_uri)
    {
        $this->confirmation_uri = $confirmation_uri;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isMerchantDirect()
    {
        return $this->merchant_direct;
    }

    /**
     * @param boolean $merchant_direct
     * @return $this
     */
    public function setMerchantDirect($merchant_direct)
    {
        $this->merchant_direct = $merchant_direct;

        return $this;
    }

    /**
     * @return bool
     */
    public function isOrderComplete()
    {
        return $this->order_complete;
    }

    /**
     * @param bool $order_complete
     * @return MerchantAttributes
     */
    public function setOrderComplete($order_complete)
    {
        $this->order_complete = $order_complete;

        return $this;
    }

    /**
     * @return bool
     */
    public function isFcbShippingMethods()
    {
        return $this->fcb_shipping_methods;
    }

    /**
     * @param bool $fcb_shipping_methods
     * @return MerchantAttributes
     */
    public function setFcbShippingMethods($fcb_shipping_methods)
    {
        $this->fcb_shipping_methods = $fcb_shipping_methods;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCustomShippingRates()
    {
        return $this->custom_shipping_rates;
    }

    /**
     * @param bool $custom_shipping_rates
     * @return MerchantAttributes
     */
    public function setCustomShippingRates($custom_shipping_rates)
    {
        $this->custom_shipping_rates = $custom_shipping_rates;

        return $this;
    }

    /**
     * @return bool
     */
    public function isMerchantControl()
    {
        return $this->merchant_control;
    }

    /**
     * @param bool $merchant_control
     * @return MerchantAttributes
     */
    public function setMerchantControl($merchant_control)
    {
        $this->merchant_control = $merchant_control;

        return $this;
    }


}
