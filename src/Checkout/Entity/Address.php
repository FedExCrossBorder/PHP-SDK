<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class Address
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $company
 * @property string $address_1
 * @property string $address_2
 * @property string $city
 * @property string $country
 * @property string $state
 * @property string $zip
 * @property string $phone
 * @property string $email
 * @property string $custom_1
 * @property string $custom_2
 * @property string $custom_3
 * @property string $tax_id
 */
class Address extends BaseModel
{
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address_1;
    }

    /**
     * @param string $address_1
     * @return $this
     */
    public function setAddress1($address_1)
    {
        $this->address_1 = $address_1;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address_2;
    }

    /**
     * @param string $address_2
     * @return $this
     */
    public function setAddress2($address_2)
    {
        $this->address_2 = $address_2;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     * @return $this
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom1()
    {
        return $this->custom_1;
    }

    /**
     * @param string $custom_1
     * @return $this
     */
    public function setCustom1($custom_1)
    {
        $this->custom_1 = $custom_1;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom2()
    {
        return $this->custom_2;
    }

    /**
     * @param string $custom_2
     * @return $this
     */
    public function setCustom2($custom_2)
    {
        $this->custom_2 = $custom_2;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom3()
    {
        return $this->custom_3;
    }

    /**
     * @param string $custom_3
     * @return $this
     */
    public function setCustom3($custom_3)
    {
        $this->custom_3 = $custom_3;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxId()
    {
        return $this->tax_id;
    }

    /**
     * @param string $tax_id
     * @return $this
     */
    public function setTaxId($tax_id)
    {
        $this->tax_id = $tax_id;

        return $this;
    }
}
