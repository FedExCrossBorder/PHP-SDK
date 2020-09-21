<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class CheckoutCharges
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property string $shipping
 * @property string $duty
 * @property string $tax
 * @property string $ddp
 * @property string $intl_processing_fee
 * @property string $remote_area_surcharge
 * @property string $loss_damage_protection

 */
class CheckoutCharges extends BaseModel
{
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
    public function getDuty()
    {
        return $this->duty;
    }

    /**
     * @param string $duty
     * @return $this
     */
    public function setDuty($duty)
    {
        $this->duty = $duty;

        return $this;
    }

    /**
     * @return string
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param string $tax
     * @return $this
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * @return string
     */
    public function getDdp()
    {
        return $this->ddp;
    }

    /**
     * @param string $ddp
     * @return $this
     */
    public function setDdp($ddp)
    {
        $this->ddp = $ddp;

        return $this;
    }

    /**
     * @return string
     */
    public function getIntlProcessingFee()
    {
        return $this->intl_processing_fee;
    }

    /**
     * @param string $intl_processing_fee
     * @return $this
     */
    public function setIntlProcessingFee($intl_processing_fee)
    {
        $this->intl_processing_fee = $intl_processing_fee;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemoteAreaSurcharge()
    {
        return $this->remote_area_surcharge;
    }

    /**
     * @param string $remote_area_surcharge
     * @return $this
     */
    public function setRemoteAreaSurcharge($remote_area_surcharge)
    {
        $this->remote_area_surcharge = $remote_area_surcharge;

        return $this;
    }

    /**
     * @return string
     */
    public function getLossDamageProtection()
    {
        return $this->loss_damage_protection;
    }

    /**
     * @param string $loss_damage_protection
     * @return $this
     */
    public function setLossDamageProtection($loss_damage_protection)
    {
        $this->loss_damage_protection = $loss_damage_protection;

        return $this;
    }

}
