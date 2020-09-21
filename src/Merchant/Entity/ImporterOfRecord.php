<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 31/10/18
 * Time: 11:03 AM
 */

namespace FedExCrossBorder\Merchant\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ImporterOfRecord
 * @package FedExCrossBorder\Merchant\Entity
 *
 * @property integer $type
 * @property string $importerName
 * @property string $companyName
 * @property string $streetAddress1
 * @property string $streetAddress2
 * @property string $streetAddress3
 * @property string $city
 * @property string $state
 * @property string $zipCode
 * @property string $country
 * @property string $phone
 * @property string $taxIDEIN
 * @property string $cbn
 */
class ImporterOfRecord extends BaseModel
{
    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return ImporterOfRecord
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getImporterName()
    {
        return $this->importerName;
    }

    /**
     * @param string $importerName
     * @return ImporterOfRecord
     */
    public function setImporterName($importerName)
    {
        $this->importerName = $importerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return ImporterOfRecord
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress1()
    {
        return $this->streetAddress1;
    }

    /**
     * @param string $streetAddress1
     * @return ImporterOfRecord
     */
    public function setStreetAddress1($streetAddress1)
    {
        $this->streetAddress1 = $streetAddress1;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress2()
    {
        return $this->streetAddress2;
    }

    /**
     * @param string $streetAddress2
     * @return ImporterOfRecord
     */
    public function setStreetAddress2($streetAddress2)
    {
        $this->streetAddress2 = $streetAddress2;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress3()
    {
        return $this->streetAddress3;
    }

    /**
     * @param string $streetAddress3
     * @return ImporterOfRecord
     */
    public function setStreetAddress3($streetAddress3)
    {
        $this->streetAddress3 = $streetAddress3;
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
     * @return ImporterOfRecord
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
     * @return ImporterOfRecord
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
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return ImporterOfRecord
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
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
     * @return ImporterOfRecord
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
     * @return ImporterOfRecord
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxIDEIN()
    {
        return $this->taxIDEIN;
    }

    /**
     * @param string $taxIDEIN
     * @return ImporterOfRecord
     */
    public function setTaxIDEIN($taxIDEIN)
    {
        $this->taxIDEIN = $taxIDEIN;
        return $this;
    }

    /**
     * @return string
     */
    public function getCbn()
    {
        return $this->cbn;
    }

    /**
     * @param string $cbn
     * @return ImporterOfRecord
     */
    public function setCbn($cbn)
    {
        $this->cbn = $cbn;
        return $this;
    }
}
