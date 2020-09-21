<?php

namespace FedExCrossBorder\WebApp\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class Order
 *
 * @package FedExCrossBorder\WebApp\Entity
 *
 * @property string $domestic_shipping_charge
 * @property string $order_currency
 * @property string $order_transit
 * @property string $custom_order_1
 * @property string $custom_order_2
 * @property string $custom_order_3
 * @property string $retailer_order_number
 */
class Order extends BaseModel
{
    /**
     * @return string
     */
    public function getDomesticShippingCharge()
    {
        return $this->domestic_shipping_charge;
    }

    /**
     * @param string $domestic_shipping_charge
     * @return $this
     */
    public function setDomesticShippingCharge($domestic_shipping_charge)
    {
        $this->domestic_shipping_charge = $domestic_shipping_charge;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderCurrency()
    {
        return $this->order_currency;
    }

    /**
     * @param string $order_currency
     * @return $this
     */
    public function setOrderCurrency($order_currency)
    {
        $this->order_currency = $order_currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderTransit()
    {
        return $this->order_transit;
    }

    /**
     * @param string $order_transit
     * @return $this
     */
    public function setOrderTransit($order_transit)
    {
        $this->order_transit = $order_transit;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomOrder1()
    {
        return $this->custom_order_1;
    }

    /**
     * @param string $custom_order_1
     * @return $this
     */
    public function setCustomOrder1($custom_order_1)
    {
        $this->custom_order_1 = $custom_order_1;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomOrder2()
    {
        return $this->custom_order_2;
    }

    /**
     * @param string $custom_order_2
     * @return $this
     */
    public function setCustomOrder2($custom_order_2)
    {
        $this->custom_order_2 = $custom_order_2;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomOrder3()
    {
        return $this->custom_order_3;
    }

    /**
     * @param string $custom_order_3
     * @return $this
     */
    public function setCustomOrder3($custom_order_3)
    {
        $this->custom_order_3 = $custom_order_3;

        return $this;
    }

    /**
     * @return string
     */
    public function getRetailerOrderNumber()
    {
        return $this->retailer_order_number;
    }

    /**
     * @param string $retailer_order_number
     * @return $this
     */
    public function setRetailerOrderNumber($retailer_order_number)
    {
        $this->retailer_order_number = $retailer_order_number;

        return $this;
    }
}
