<?php

namespace FedExCrossBorder\Tracking\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class TrackingParam
 *
 * @package FedExCrossBorder\Tracking\Entity
 *
 * @property MerchantCredential $merchant_credential
 * @property CustomerInfo $customer_info
 * @property boolean $auto_open
 */
class TrackingParam extends BaseModel
{
    /**
     * @return MerchantCredential
     */
    public function getMerchantCredential()
    {
        return $this->merchant_credential;
    }

    /**
     * @param MerchantCredential $merchant_credential
     * @return $this
     */
    public function setMerchantCredential($merchant_credential)
    {
        $this->merchant_credential = $merchant_credential;

        return $this;
    }

    /**
     * @return CustomerInfo
     */
    public function getCustomerInfo()
    {
        return $this->customer_info;
    }

    /**
     * @param CustomerInfo $customer_info
     * @return $this
     */
    public function setCustomerInfo($customer_info)
    {
        $this->customer_info = $customer_info;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isAutoOpen()
    {
        return $this->auto_open;
    }

    /**
     * @param boolean $auto_open
     * @return $this
     */
    public function setAutoOpen($auto_open)
    {
        $this->auto_open = $auto_open;

        return $this;
    }
}
