<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 6/11/18
 * Time: 11:09 AM
 */

namespace FedExCrossBorder\Connect\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ConnectOrderRequest
 * @package FedExCrossBorder\Connect\Entity
 *
 * @property string $orderNumber
 * @property string $merchantKey
 * @property string $sellerIdKey
 * @property string $language
 * @property string $landedCostTransactionID
 * @property OrderInformation[] $ordersInfo
 * @property string $shipToBusiness
 * @property string $shipToFirstName
 * @property string $shipToLastName
 * @property string $shipToAddress1
 * @property string $shipToAddress2
 * @property string $shipToAddress3
 * @property string $shipToCity
 * @property string $shipToState
 * @property string $shipToZip
 * @property string $shipToCountry
 * @property string $shipToPhone
 * @property string $shipToEmail
 * @property string $shipToTaxID
 * @property integer $repackage
 * @property integer $dutyPaid
 * @property integer $lossAndDamageProtection
 * @property integer $emailCustomerTracking
 * @property integer $bongoCustomerService
 * @property string $sellingStoreName
 * @property string $sellingStoreURL
 * @property string $sellingStoreURLCS
 * @property string $sellingStoreURLImage
 */
class ConnectOrderRequest extends BaseModel
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
     * @return ConnectOrderRequest
     */
    public function setSellerIdKey($sellerIdKey)
    {
        $this->sellerIdKey = $sellerIdKey;
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
     * @return ConnectOrderRequest
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
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
     * @return ConnectOrderRequest
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
     * @return ConnectOrderRequest
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getLandedCostTransactionID()
    {
        return $this->landedCostTransactionID;
    }

    /**
     * @param string $landedCostTransactionID
     * @return ConnectOrderRequest
     */
    public function setLandedCostTransactionID($landedCostTransactionID)
    {
        $this->landedCostTransactionID = $landedCostTransactionID;
        return $this;
    }

    /**
     * @return OrderInformation[]
     */
    public function getOrdersInfo()
    {
        return $this->ordersInfo;
    }

    /**
     * @param OrderInformation[] $ordersInfo
     * @return ConnectOrderRequest
     */
    public function setOrdersInfo($ordersInfo)
    {
        $this->ordersInfo = $ordersInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToBusiness()
    {
        return $this->shipToBusiness;
    }

    /**
     * @param string $shipToBusiness
     * @return ConnectOrderRequest
     */
    public function setShipToBusiness($shipToBusiness)
    {
        $this->shipToBusiness = $shipToBusiness;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToFirstName()
    {
        return $this->shipToFirstName;
    }

    /**
     * @param string $shipToFirstName
     * @return ConnectOrderRequest
     */
    public function setShipToFirstName($shipToFirstName)
    {
        $this->shipToFirstName = $shipToFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToLastName()
    {
        return $this->shipToLastName;
    }

    /**
     * @param string $shipToLastName
     * @return ConnectOrderRequest
     */
    public function setShipToLastName($shipToLastName)
    {
        $this->shipToLastName = $shipToLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToAddress1()
    {
        return $this->shipToAddress1;
    }

    /**
     * @param string $shipToAddress1
     * @return ConnectOrderRequest
     */
    public function setShipToAddress1($shipToAddress1)
    {
        $this->shipToAddress1 = $shipToAddress1;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToAddress2()
    {
        return $this->shipToAddress2;
    }

    /**
     * @param string $shipToAddress2
     * @return ConnectOrderRequest
     */
    public function setShipToAddress2($shipToAddress2)
    {
        $this->shipToAddress2 = $shipToAddress2;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToAddress3()
    {
        return $this->shipToAddress3;
    }

    /**
     * @param string $shipToAddress3
     * @return ConnectOrderRequest
     */
    public function setShipToAddress3($shipToAddress3)
    {
        $this->shipToAddress3 = $shipToAddress3;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToCity()
    {
        return $this->shipToCity;
    }

    /**
     * @param string $shipToCity
     * @return ConnectOrderRequest
     */
    public function setShipToCity($shipToCity)
    {
        $this->shipToCity = $shipToCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToState()
    {
        return $this->shipToState;
    }

    /**
     * @param string $shipToState
     * @return ConnectOrderRequest
     */
    public function setShipToState($shipToState)
    {
        $this->shipToState = $shipToState;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToZip()
    {
        return $this->shipToZip;
    }

    /**
     * @param string $shipToZip
     * @return ConnectOrderRequest
     */
    public function setShipToZip($shipToZip)
    {
        $this->shipToZip = $shipToZip;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToCountry()
    {
        return $this->shipToCountry;
    }

    /**
     * @param string $shipToCountry
     * @return ConnectOrderRequest
     */
    public function setShipToCountry($shipToCountry)
    {
        $this->shipToCountry = $shipToCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToPhone()
    {
        return $this->shipToPhone;
    }

    /**
     * @param string $shipToPhone
     * @return ConnectOrderRequest
     */
    public function setShipToPhone($shipToPhone)
    {
        $this->shipToPhone = $shipToPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToEmail()
    {
        return $this->shipToEmail;
    }

    /**
     * @param string $shipToEmail
     * @return ConnectOrderRequest
     */
    public function setShipToEmail($shipToEmail)
    {
        $this->shipToEmail = $shipToEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToTaxID()
    {
        return $this->shipToTaxID;
    }

    /**
     * @param string $shipToTaxID
     * @return ConnectOrderRequest
     */
    public function setShipToTaxID($shipToTaxID)
    {
        $this->shipToTaxID = $shipToTaxID;
        return $this;
    }

    /**
     * @return int
     */
    public function getRepackage()
    {
        return $this->repackage;
    }

    /**
     * @param int $repackage
     * @return ConnectOrderRequest
     */
    public function setRepackage($repackage)
    {
        $this->repackage = $repackage;
        return $this;
    }

    /**
     * @return int
     */
    public function getDutyPaid()
    {
        return $this->dutyPaid;
    }

    /**
     * @param int $dutyPaid
     * @return ConnectOrderRequest
     */
    public function setDutyPaid($dutyPaid)
    {
        $this->dutyPaid = $dutyPaid;
        return $this;
    }

    /**
     * @return int
     */
    public function getLossAndDamageProtection()
    {
        return $this->lossAndDamageProtection;
    }

    /**
     * @param int $lossAndDamageProtection
     * @return ConnectOrderRequest
     */
    public function setLossAndDamageProtection($lossAndDamageProtection)
    {
        $this->lossAndDamageProtection = $lossAndDamageProtection;
        return $this;
    }

    /**
     * @return int
     */
    public function getEmailCustomerTracking()
    {
        return $this->emailCustomerTracking;
    }

    /**
     * @param int $emailCustomerTracking
     * @return ConnectOrderRequest
     */
    public function setEmailCustomerTracking($emailCustomerTracking)
    {
        $this->emailCustomerTracking = $emailCustomerTracking;
        return $this;
    }

    /**
     * @return int
     */
    public function getBongoCustomerService()
    {
        return $this->bongoCustomerService;
    }

    /**
     * @param int $bongoCustomerService
     * @return ConnectOrderRequest
     */
    public function setBongoCustomerService($bongoCustomerService)
    {
        $this->bongoCustomerService = $bongoCustomerService;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellingStoreName()
    {
        return $this->sellingStoreName;
    }

    /**
     * @param string $sellingStoreName
     * @return ConnectOrderRequest
     */
    public function setSellingStoreName($sellingStoreName)
    {
        $this->sellingStoreName = $sellingStoreName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellingStoreURL()
    {
        return $this->sellingStoreURL;
    }

    /**
     * @param string $sellingStoreURL
     * @return ConnectOrderRequest
     */
    public function setSellingStoreURL($sellingStoreURL)
    {
        $this->sellingStoreURL = $sellingStoreURL;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellingStoreURLCS()
    {
        return $this->sellingStoreURLCS;
    }

    /**
     * @param string $sellingStoreURLCS
     * @return ConnectOrderRequest
     */
    public function setSellingStoreURLCS($sellingStoreURLCS)
    {
        $this->sellingStoreURLCS = $sellingStoreURLCS;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellingStoreURLImage()
    {
        return $this->sellingStoreURLImage;
    }

    /**
     * @param string $sellingStoreURLImage
     * @return ConnectOrderRequest
     */
    public function setSellingStoreURLImage($sellingStoreURLImage)
    {
        $this->sellingStoreURLImage = $sellingStoreURLImage;
        return $this;
    }

}
