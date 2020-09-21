<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class AvailableCountries
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property \FedExCrossBorder\Checkout\Entity\ShippingMethod[] $available_shipping_methods
 */
class AvailableShippingMethods extends BaseModel
{
    /**
     * @return \FedExCrossBorder\Checkout\Entity\ShippingMethod[]
     */
    public function getAvailableShippingMethods()
    {
        return $this->available_shipping_methods;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\ShippingMethod[] $available_shipping_methods
     */
    public function setAvailableShippingMethods($available_shipping_methods)
    {
        $this->available_shipping_methods = $available_shipping_methods;
    }
}
