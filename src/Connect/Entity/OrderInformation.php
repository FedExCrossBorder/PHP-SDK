<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 6/11/18
 * Time: 11:13 AM
 */

namespace FedExCrossBorder\Connect\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class OrderInformation
 * @package FedExCrossBorder\Connect\Entity
 *
 * @property string $productID
 * @property integer $quantity
 * @property float $price
 * @property string $itemExportHubCountry
 * @property string $orderValuationCurrency
 * @property integer $carrier
 * @property string $trackingNumber
 */
class OrderInformation extends BaseModel
{
    /**
     * @return string
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @param string $productID
     * @return OrderInformation
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return OrderInformation
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return OrderInformation
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemExportHubCountry()
    {
        return $this->itemExportHubCountry;
    }

    /**
     * @param string $itemExportHubCountry
     * @return OrderInformation
     */
    public function setItemExportHubCountry($itemExportHubCountry)
    {
        $this->itemExportHubCountry = $itemExportHubCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderValuationCurrency()
    {
        return $this->orderValuationCurrency;
    }

    /**
     * @param string $orderValuationCurrency
     * @return OrderInformation
     */
    public function setOrderValuationCurrency($orderValuationCurrency)
    {
        $this->orderValuationCurrency = $orderValuationCurrency;
        return $this;
    }

    /**
     * @return int
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param int $carrier
     * @return OrderInformation
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     * @return OrderInformation
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

}
