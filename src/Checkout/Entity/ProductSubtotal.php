<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ProductSubtotal
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property string $id
 * @property string $quantity
 * @property string $unit_price
 * @property string $retail_price
 * @property string $total_price
 */
class ProductSubtotal extends BaseModel
{
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    /**
     * @param string $unit_price
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->unit_price = $unit_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getRetailPrice()
    {
        return $this->retail_price;
    }

    /**
     * @param string $retail_price
     * @return $this
     */
    public function setRetailPrice($retail_price)
    {
        $this->retail_price = $retail_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalPrice()
    {
        return $this->total_price;
    }

    /**
     * @param string $total_price
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->total_price = $total_price;

        return $this;
    }
}
