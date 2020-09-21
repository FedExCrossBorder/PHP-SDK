<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ShippingMethod
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property integer $code
 * @property string $name
 * @property string $amount
 * @property string $delivery_date
 * @property string $rate_type
 * @property string $dutiable_amount
 * @property integer $delivery_days
 * @property integer $service_level_category
 * @property string $message
 */
class ShippingMethod extends BaseModel
{
    /**
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param integer $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

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
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->delivery_date;
    }

    /**
     * @param string $delivery_date
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->delivery_date = $delivery_date;

        return $this;
    }

    /**
     * @return string
     */
    public function getRateType()
    {
        return $this->rate_type;
    }

    /**
     * @param string $rate_type
     * @return ShippingMethod
     */
    public function setRateType($rate_type)
    {
        $this->rate_type = $rate_type;

        return $this;
    }

    /**
     * @return string
     */
    public function getDutiableAmount()
    {
        return $this->dutiable_amount;
    }

    /**
     * @param string $dutiable_amount
     * @return ShippingMethod
     */
    public function setDutiableAmount($dutiable_amount)
    {
        $this->dutiable_amount = $dutiable_amount;

        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryDays()
    {
        return $this->delivery_days;
    }

    /**
     * @param int $delivery_days
     * @return ShippingMethod
     */
    public function setDeliveryDays($delivery_days)
    {
        $this->delivery_days = $delivery_days;

        return $this;
    }

    /**
     * @return int
     */
    public function getServiceLevelCategory()
    {
        return $this->service_level_category;
    }

    /**
     * @param int $service_level_category
     * @return ShippingMethod
     */
    public function setServiceLevelCategory($service_level_category)
    {
        $this->service_level_category = $service_level_category;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return ShippingMethod
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }


}
