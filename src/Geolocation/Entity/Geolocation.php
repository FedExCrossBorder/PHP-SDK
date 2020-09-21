<?php

namespace FedExCrossBorder\Geolocation\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class Geolocation
 *
 * @package FedExCrossBorder\Geolocation\Entity
 *
 * @property string $country_code
 * @property string $country_name
 * @property string $country_currency
 * @property string $status
 * @property GeolocationError $error
 */
class Geolocation extends BaseModel
{
    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * @param string $country_code
     */
    public function setCountryCode($country_code)
    {
        $this->country_code = $country_code;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->country_name;
    }

    /**
     * @param string $country_name
     */
    public function setCountryName($country_name)
    {
        $this->country_name = $country_name;
    }

    /**
     * @return string
     */
    public function getCountryCurrency()
    {
        return $this->country_currency;
    }

    /**
     * @param string $country_currency
     */
    public function setCountryCurrency($country_currency)
    {
        $this->country_currency = $country_currency;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return \FedExCrossBorder\Geolocation\Entity\GeolocationError
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param \FedExCrossBorder\Geolocation\Entity\GeolocationError $error
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }
}
