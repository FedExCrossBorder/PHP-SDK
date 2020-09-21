<?php

namespace FedExCrossBorder\WebApp\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class Customer
 *
 * @package FedExCrossBorder\WebApp\Entity
 *
 * @property Address $billing
 * @property Address $shipping
 */
class Customer extends BaseModel
{
    /**
     * @return \FedExCrossBorder\WebApp\Entity\Address
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * @param \FedExCrossBorder\WebApp\Entity\Address $billing
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\WebApp\Entity\Address
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param \FedExCrossBorder\WebApp\Entity\Address $shipping
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }
}
