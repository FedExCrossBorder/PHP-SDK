<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class Product
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property string $id
 * @property string $name
 * @property integer $quantity
 * @property string $price
 * @property string $shipping
 * @property string $country_of_origin
 * @property string $distribution_country
 * @property string $distribution_zip
 * @property string $product_transit
 * @property string $custom_1
 * @property string $custom_2
 * @property string $custom_3
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
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param integer $quantity
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
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param string $shipping
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

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
     * @return Product
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
     * @return Product
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
     * @return Product
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
     * @return Product
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

    public function isValid()
    {
        if (empty($this->id)) {
            return false;
        }

        return filter_var($this->quantity,
            FILTER_VALIDATE_INT,
            array(
                'options' => array(
                    'min_range' => 1
                )
            )
        );
    }
}
