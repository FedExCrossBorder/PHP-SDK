<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 6/11/18
 * Time: 11:40 AM
 */

namespace FedExCrossBorder\Connect\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ConnectOrderRemoveRequest
 * @package FedExCrossBorder\Connect\Entity
 *
 * @property string $merchantKey
 * @property string $sellerIdKey
 * @property string $language
 * @property string $orderNumber
 */
class ConnectOrderRemoveRequest extends BaseModel
{
    /**
     * @return string
     */
    public function getSellerIdKey()
    {
        return $this->sellerIdKey;
    }

    /**
     * @param string $sellerIdKey
     * @return ConnectOrderRemoveRequest
     */
    public function setSellerIdKey($sellerIdKey)
    {
        $this->sellerIdKey = $sellerIdKey;
        return $this;
    }
    /**
     * @return string
     */
    public function getMerchantKey()
    {
        return $this->merchantKey;
    }

    /**
     * @param string $merchantKey
     * @return ConnectOrderRemoveRequest
     */
    public function setMerchantKey($merchantKey)
    {
        $this->merchantKey = $merchantKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return ConnectOrderRemoveRequest
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return ConnectOrderRemoveRequest
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

}
