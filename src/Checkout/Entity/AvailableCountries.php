<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class AvailableCountries
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property \FedExCrossBorder\Checkout\Entity\Country[] $available_shipping_countries
 * @property \FedExCrossBorder\Checkout\Entity\Country[] $available_billing_countries
 */
class AvailableCountries extends BaseModel
{
    /**
     * @return \FedExCrossBorder\Checkout\Entity\Country[]
     */
    public function getAvailableShippingCountries()
    {
        return $this->available_shipping_countries;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\Country[] $available_shipping_countries
     * @return $this
     */
    public function setAvailableShippingCountries($available_shipping_countries)
    {
        $this->available_shipping_countries = $available_shipping_countries;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\Country[]
     */
    public function getAvailableBillingCountries()
    {
        return $this->available_billing_countries;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\Country[] $available_billing_countries
     * @return $this
     */
    public function setAvailableBillingCountries($available_billing_countries)
    {
        $this->available_billing_countries = $available_billing_countries;

        return $this;
    }
}
