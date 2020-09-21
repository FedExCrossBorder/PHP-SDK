<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 30/10/18
 * Time: 03:11 PM
 */

namespace FedExCrossBorder\Merchant\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class Address
 * @package FedExCrossBorder\Merchant\Entity
 *
 * @property string $contact_name
 * @property string $company_name
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $zip_code
 * @property string $country
 * @property string $phone
 * @property string $tax_id
 */
class Address extends BaseModel
{
    /**
     * @return string
     */
    public function getContactName()
    {
        return $this->contact_name;
    }

    /**
     * @param string $contact_name
     * @return Address
     */
    public function setContactName($contact_name)
    {
        $this->contact_name = $contact_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * @param string $company_name
     * @return Address
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     * @return Address
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     * @return Address
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
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
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
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
     * @return Address
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * @param string $zip_code
     * @return Address
     */
    public function setZipCode($zip_code)
    {
        $this->zip_code = $zip_code;
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
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * @return Address
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
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
     * @return Address
     */
    public function setTaxId($tax_id)
    {
        $this->tax_id = $tax_id;
        return $this;
    }

}
