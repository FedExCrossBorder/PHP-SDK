<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ShippingMethodOption
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property integer $code
 */
class ShippingMethodOption extends BaseModel
{
    const INTERNATIONAL_EXPRESS = 0;
    const INTERNATIONAL_STANDARD = 1;
    const INTERNATIONAL_ECONOMY = 2;
    const MERCHANT_DIRECT = 3;

    /**
     * ShippingMethodOption constructor
     *
     * @param array|int|string $data
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if(is_int($data)) {
            $this->setCode($data);
        }
    }

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
}
