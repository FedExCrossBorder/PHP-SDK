<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 6/11/18
 * Time: 11:43 AM
 */

namespace FedExCrossBorder\Connect\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ConnectOrderTrackingUpdateRequest
 * @package FedExCrossBorder\Connect\Entity
 *
 * @property string $merchantKey
 * @property string $sellerIdKey
 * @property string $language
 * @property string $orderNumber
 * @property TrackingList[] $trackList
 */
class ConnectOrderTrackingUpdateRequest extends BaseModel
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
     * @return ConnectOrderTrackingUpdateRequest
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
     * @return ConnectOrderTrackingUpdateRequest
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
     * @return ConnectOrderTrackingUpdateRequest
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
     * @return ConnectOrderTrackingUpdateRequest
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @return TrackingList[]
     */
    public function getTrackList()
    {
        return $this->trackList;
    }

    /**
     * @param TrackingList[] $trackList
     * @return ConnectOrderTrackingUpdateRequest
     */
    public function setTrackList($trackList)
    {
        $this->trackList = $trackList;
        return $this;
    }

}
