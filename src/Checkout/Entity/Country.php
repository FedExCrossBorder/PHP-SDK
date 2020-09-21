<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class Country
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property string $country_code
 * @property string $country_name
 * @property string $country_phone_code
 * @property boolean $state_required
 * @property boolean $zip_code_required
 * @property boolean $tax_id_required
 * @property boolean $domestic
 * @property string $country_tax_id_label
 */
class Country extends BaseModel
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
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->country_code = $country_code;

        return $this;
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
     * @return $this
     */
    public function setCountryName($country_name)
    {
        $this->country_name = $country_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryPhoneCode()
    {
        return $this->country_phone_code;
    }

    /**
     * @param string $country_phone_code
     * @return $this
     */
    public function setCountryPhoneCode($country_phone_code)
    {
        $this->country_phone_code = $country_phone_code;

        return $this;
    }

    /**
     * @return bool
     */
    public function isStateRequired()
    {
        return $this->state_required;
    }

    /**
     * @param bool $state_required
     * @return Country
     */
    public function setStateRequired($state_required)
    {
        $this->state_required = $state_required;

        return $this;
    }

    /**
     * @return bool
     */
    public function isZipCodeRequired()
    {
        return $this->zip_code_required;
    }

    /**
     * @param bool $zip_code_required
     * @return Country
     */
    public function setZipCodeRequired($zip_code_required)
    {
        $this->zip_code_required = $zip_code_required;

        return $this;
    }

    /**
     * @return bool
     */
    public function isTaxIdRequired()
    {
        return $this->tax_id_required;
    }

    /**
     * @param bool $tax_id_required
     * @return Country
     */
    public function setTaxIdRequired($tax_id_required)
    {
        $this->tax_id_required = $tax_id_required;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDomestic()
    {
        return $this->domestic;
    }

    /**
     * @param bool $domestic
     * @return Country
     */
    public function setDomestic($domestic)
    {
        $this->domestic = $domestic;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryTaxIdLabel()
    {
        return $this->country_tax_id_label;
    }

    /**
     * @param string $country_tax_id_label
     * @return Country
     */
    public function setCountryTaxIdLabel($country_tax_id_label)
    {
        $this->country_tax_id_label = $country_tax_id_label;

        return $this;
    }


}
