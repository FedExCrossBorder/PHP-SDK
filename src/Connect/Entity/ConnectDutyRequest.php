<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 6/11/18
 * Time: 09:45 AM
 */

namespace FedExCrossBorder\Connect\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ConnectDutyRequest
 * @package FedExCrossBorder\Connect\Entity
 *
 * @property string $merchantKey
 * @property string $language
 * @property ProductInfoDat[] $items
 * @property string $shipmentOriginCountry
 * @property string $shipmentDestinationCountry
 */
class ConnectDutyRequest extends BaseModel
{
    /**
     * @return string
     */
    public function getMerchantKey()
    {
        return $this->merchantKey;
    }

    /**
     * @param string $merchantKey
     * @return ConnectDutyRequest
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
     * @return ConnectDutyRequest
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return ProductInfoDat[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param ProductInfoDat[] $items
     * @return ConnectDutyRequest
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentOriginCountry()
    {
        return $this->shipmentOriginCountry;
    }

    /**
     * @param string $shipmentOriginCountry
     * @return ConnectDutyRequest
     */
    public function setShipmentOriginCountry($shipmentOriginCountry)
    {
        $this->shipmentOriginCountry = $shipmentOriginCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentDestinationCountry()
    {
        return $this->shipmentDestinationCountry;
    }

    /**
     * @param string $shipmentDestinationCountry
     * @return ConnectDutyRequest
     */
    public function setShipmentDestinationCountry($shipmentDestinationCountry)
    {
        $this->shipmentDestinationCountry = $shipmentDestinationCountry;
        return $this;
    }

}
