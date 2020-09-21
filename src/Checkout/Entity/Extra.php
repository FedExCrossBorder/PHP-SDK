<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class Extra
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property string $kount_uri_1
 * @property string $kount_uri_2
 * @property boolean $checkout_error_handling
 */
class Extra extends BaseModel
{
    /**
     * @return string
     */
    public function getKountUri1()
    {
        return $this->kount_uri_1;
    }

    /**
     * @param string $kount_uri_1
     * @return $this
     */
    public function setKountUri1($kount_uri_1)
    {
        $this->kount_uri_1 = $kount_uri_1;

        return $this;
    }

    /**
     * @return string
     */
    public function getKountUri2()
    {
        return $this->kount_uri_2;
    }

    /**
     * @param string $kount_uri_2
     * @return $this
     */
    public function setKountUri2($kount_uri_2)
    {
        $this->kount_uri_2 = $kount_uri_2;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCheckoutErrorHandling()
    {
        return $this->checkout_error_handling;
    }

    /**
     * @param bool $checkout_error_handling
     * @return Extra
     */
    public function setCheckoutErrorHandling($checkout_error_handling)
    {
        $this->checkout_error_handling = $checkout_error_handling;

        return $this;
    }
}
