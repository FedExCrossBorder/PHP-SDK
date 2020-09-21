<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 6/11/18
 * Time: 10:37 AM
 */

namespace FedExCrossBorder\Connect\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ConnectLandedCostRequest
 * @package FedExCrossBorder\Connect\Entity
 *
 * @property string $merchantKey
 * @property string $sellerIdKey
 * @property string $language
 * @property string $privateIndividuals
 * @property ProductInfo[] $items
 * @property string $shipmentOriginCountry
 * @property string $shipmentDestinationAddress1
 * @property string $shipmentDestinationAddress2
 * @property string $shipmentDestinationCity
 * @property string $shipmentDestinationStateOrProvince
 * @property string $shipmentDestinationZip
 * @property string $shipmentDestinationCountry
 * @property float $domesticShippingCost
 * @property string $internationalShippingCost
 * @property string $internationalShippingName
 * @property integer $lossAndDamageProtectionFlag
 * @property string $currency
 * @property string $currencyConversionRate
 * @property integer $service
 */
class ConnectLandedCostRequest extends BaseModel
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
     * @return ConnectLandedCostRequest
     */
    public function setMerchantKey($merchantKey)
    {
        $this->merchantKey = $merchantKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellerIdKey()
    {
        return $this->sellerIdKey;
    }

    /**
     * @param string $sellerIdKey
     * @return ConnectLandedCostRequest
     */
    public function setSellerIdKey($sellerIdKey)
    {
        $this->sellerIdKey = $sellerIdKey;
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
     * @return ConnectLandedCostRequest
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrivateIndividuals()
    {
        return $this->privateIndividuals;
    }

    /**
     * @param string $privateIndividuals
     * @return ConnectLandedCostRequest
     */
    public function setPrivateIndividuals($privateIndividuals)
    {
        $this->privateIndividuals = $privateIndividuals;
        return $this;
    }

    /**
     * @return ProductInfo[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param ProductInfo[] $items
     * @return ConnectLandedCostRequest
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
     * @return ConnectLandedCostRequest
     */
    public function setShipmentOriginCountry($shipmentOriginCountry)
    {
        $this->shipmentOriginCountry = $shipmentOriginCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentDestinationAddress1()
    {
        return $this->shipmentDestinationAddress1;
    }

    /**
     * @param string $shipmentDestinationAddress1
     * @return ConnectLandedCostRequest
     */
    public function setShipmentDestinationAddress1($shipmentDestinationAddress1)
    {
        $this->shipmentDestinationAddress1 = $shipmentDestinationAddress1;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentDestinationAddress2()
    {
        return $this->shipmentDestinationAddress2;
    }

    /**
     * @param string $shipmentDestinationAddress2
     * @return ConnectLandedCostRequest
     */
    public function setShipmentDestinationAddress2($shipmentDestinationAddress2)
    {
        $this->shipmentDestinationAddress2 = $shipmentDestinationAddress2;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentDestinationCity()
    {
        return $this->shipmentDestinationCity;
    }

    /**
     * @param string $shipmentDestinationCity
     * @return ConnectLandedCostRequest
     */
    public function setShipmentDestinationCity($shipmentDestinationCity)
    {
        $this->shipmentDestinationCity = $shipmentDestinationCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentDestinationStateOrProvince()
    {
        return $this->shipmentDestinationStateOrProvince;
    }

    /**
     * @param string $shipmentDestinationStateOrProvince
     * @return ConnectLandedCostRequest
     */
    public function setShipmentDestinationStateOrProvince($shipmentDestinationStateOrProvince)
    {
        $this->shipmentDestinationStateOrProvince = $shipmentDestinationStateOrProvince;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentDestinationZip()
    {
        return $this->shipmentDestinationZip;
    }

    /**
     * @param string $shipmentDestinationZip
     * @return ConnectLandedCostRequest
     */
    public function setShipmentDestinationZip($shipmentDestinationZip)
    {
        $this->shipmentDestinationZip = $shipmentDestinationZip;
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
     * @return ConnectLandedCostRequest
     */
    public function setShipmentDestinationCountry($shipmentDestinationCountry)
    {
        $this->shipmentDestinationCountry = $shipmentDestinationCountry;
        return $this;
    }

    /**
     * @return float
     */
    public function getDomesticShippingCost()
    {
        return $this->domesticShippingCost;
    }

    /**
     * @param float $domesticShippingCost
     * @return ConnectLandedCostRequest
     */
    public function setDomesticShippingCost($domesticShippingCost)
    {
        $this->domesticShippingCost = $domesticShippingCost;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternationalShippingCost()
    {
        return $this->internationalShippingCost;
    }

    /**
     * @param string $internationalShippingCost
     * @return ConnectLandedCostRequest
     */
    public function setInternationalShippingCost($internationalShippingCost)
    {
        $this->internationalShippingCost = $internationalShippingCost;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternationalShippingName()
    {
        return $this->internationalShippingName;
    }

    /**
     * @param string $internationalShippingName
     * @return ConnectLandedCostRequest
     */
    public function setInternationalShippingName($internationalShippingName)
    {
        $this->internationalShippingName = $internationalShippingName;
        return $this;
    }

    /**
     * @return int
     */
    public function getLossAndDamageProtectionFlag()
    {
        return $this->lossAndDamageProtectionFlag;
    }

    /**
     * @param int $lossAndDamageProtectionFlag
     * @return ConnectLandedCostRequest
     */
    public function setLossAndDamageProtectionFlag($lossAndDamageProtectionFlag)
    {
        $this->lossAndDamageProtectionFlag = $lossAndDamageProtectionFlag;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return ConnectLandedCostRequest
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyConversionRate()
    {
        return $this->currencyConversionRate;
    }

    /**
     * @param string $currencyConversionRate
     * @return ConnectLandedCostRequest
     */
    public function setCurrencyConversionRate($currencyConversionRate)
    {
        $this->currencyConversionRate = $currencyConversionRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param int $service
     * @return ConnectLandedCostRequest
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

}
