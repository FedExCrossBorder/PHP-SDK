<?php

namespace FedExCrossBorder\WebApp\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class Product
 *
 * @package FedExCrossBorder\WebApp\Entity
 *
 * @property string $id
 * @property string $name
 * @property float $quantity
 * @property float $unit_price
 * @property float $shipping
 * @property float $total_price
 * @property string $image
 * @property string $description
 * @property string $country_of_origin
 * @property string $distribution_country
 * @property string $distribution_zip
 * @property string $product_transit
 * @property string $custom_1
 * @property string $custom_2
 * @property string $custom_3
 * @property float $retail_price
 * @property string $sw
 * @property integer $indice
 */
class Product extends BaseModel
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    /**
     * @param float $unit_price
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->unit_price = $unit_price;

        return $this;
    }

    /**
     * @return float
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param float $shipping
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->total_price;
    }

    /**
     * @param float $total_price
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->total_price = $total_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->country_of_origin;
    }

    /**
     * @param string $country_of_origin
     * @return $this
     */
    public function setCountryOfOrigin($country_of_origin)
    {
        $this->country_of_origin = $country_of_origin;

        return $this;
    }

    /**
     * @return string
     */
    public function getDistributionCountry()
    {
        return $this->distribution_country;
    }

    /**
     * @param string $distribution_country
     * @return $this
     */
    public function setDistributionCountry($distribution_country)
    {
        $this->distribution_country = $distribution_country;

        return $this;
    }

    /**
     * @return string
     */
    public function getDistributionZip()
    {
        return $this->distribution_zip;
    }

    /**
     * @param string $distribution_zip
     * @return $this
     */
    public function setDistributionZip($distribution_zip)
    {
        $this->distribution_zip = $distribution_zip;

        return $this;
    }

    /**
     * @return string
     */
    public function getProductTransit()
    {
        return $this->product_transit;
    }

    /**
     * @param string $product_transit
     * @return $this
     */
    public function setProductTransit($product_transit)
    {
        $this->product_transit = $product_transit;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom1()
    {
        return $this->custom_1;
    }

    /**
     * @param string $custom_1
     * @return $this
     */
    public function setCustom1($custom_1)
    {
        $this->custom_1 = $custom_1;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom2()
    {
        return $this->custom_2;
    }

    /**
     * @param string $custom_2
     * @return $this
     */
    public function setCustom2($custom_2)
    {
        $this->custom_2 = $custom_2;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom3()
    {
        return $this->custom_3;
    }

    /**
     * @param string $custom_3
     * @return $this
     */
    public function setCustom3($custom_3)
    {
        $this->custom_3 = $custom_3;

        return $this;
    }

    /**
     * @return float
     */
    public function getRetailPrice()
    {
        return $this->retail_price;
    }

    /**
     * @param float $retail_price
     * @return Product
     */
    public function setRetailPrice($retail_price)
    {
        $this->retail_price = $retail_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getSw()
    {
        return $this->sw;
    }

    /**
     * @param string $sw
     * @return Product
     */
    public function setSw($sw)
    {
        $this->sw = $sw;

        return $this;
    }

    /**
     * @return integer
     */
    public function getIndice()
    {
        return $this->indice;
    }

    /**
     * @param integer $indice
     * @return Product
     */
    public function setIndice($indice)
    {
        $this->indice = $indice;

        return $this;
    }
}
