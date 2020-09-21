<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 6/11/18
 * Time: 10:46 AM
 */

namespace FedExCrossBorder\Connect\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ProductInfo
 * @package FedExCrossBorder\Connect\Entity
 *
 * @property string $productID
 * @property integer $quantity
 * @property float $price
 * @property string $itemExportHubCountry
 * @property string $dutyId
 */
class ProductInfo extends BaseModel
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
     * @return ProductInfo
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
     * @return ProductInfo
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
     * @return ProductInfo
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
     * @return ProductInfo
     */
    public function setItemExportHubCountry($itemExportHubCountry)
    {
        $this->itemExportHubCountry = $itemExportHubCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getDutyId()
    {
        return $this->dutyId;
    }

    /**
     * @param string $dutyId
     * @return ProductInfo
     */
    public function setDutyId($dutyId)
    {
        $this->dutyId = $dutyId;
        return $this;
    }

}
