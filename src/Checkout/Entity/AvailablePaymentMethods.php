<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class AvailableCountries
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property \FedExCrossBorder\Checkout\Entity\PaymentMethod[] $available_payment_methods
 */
class AvailablePaymentMethods extends BaseModel
{
    /**
     * @return \FedExCrossBorder\Checkout\Entity\PaymentMethod[]
     */
    public function getAvailablePaymentMethods()
    {
        return $this->available_payment_methods;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\PaymentMethod[] $available_payment_methods
     */
    public function setAvailablePaymentMethods($available_payment_methods)
    {
        $this->available_payment_methods = $available_payment_methods;
    }
}
