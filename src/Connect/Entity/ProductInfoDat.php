<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 6/11/18
 * Time: 09:39 AM
 */

namespace FedExCrossBorder\Connect\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class productsIdDat
 * @package FedExCrossBorder\Connect\Entity
 *
 * @property string $productID
 * @property string $description
 * @property string $productName
 * @property string $url
 * @property string $imageUrl
 * @property float $price
 * @property string $countryOfOrigin
 * @property integer $hsCode
 * @property string $itemValuationCurrency
 * @property string $eccn
 * @property integer $hazFlag
 * @property string $licenseFlag
 * @property string $importFlag
 * @property string $productType
 * @property string $unitWeight
 * @property string $unitDimension
 * @property CartonsDat[] $itemInformation
 */
class ProductInfoDat extends BaseModel
{
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return ProductInfoDat
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return ProductInfoDat
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return ProductInfoDat
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return ProductInfoDat
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return ProductInfoDat
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return int
     */
    public function getHsCode()
    {
        return $this->hsCode;
    }

    /**
     * @param int $hsCode
     * @return ProductInfoDat
     */
    public function setHsCode($hsCode)
    {
        $this->hsCode = $hsCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemValuationCurrency()
    {
        return $this->itemValuationCurrency;
    }

    /**
     * @param string $itemValuationCurrency
     * @return ProductInfoDat
     */
    public function setItemValuationCurrency($itemValuationCurrency)
    {
        $this->itemValuationCurrency = $itemValuationCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getEccn()
    {
        return $this->eccn;
    }

    /**
     * @param string $eccn
     * @return ProductInfoDat
     */
    public function setEccn($eccn)
    {
        $this->eccn = $eccn;
        return $this;
    }

    /**
     * @return integer
     */
    public function getHazFlag()
    {
        return $this->hazFlag;
    }

    /**
     * @param integer $hazFlag
     * @return ProductInfoDat
     */
    public function setHazFlag($hazFlag)
    {
        $this->hazFlag = $hazFlag;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseFlag()
    {
        return $this->licenseFlag;
    }

    /**
     * @param string $licenseFlag
     * @return ProductInfoDat
     */
    public function setLicenseFlag($licenseFlag)
    {
        $this->licenseFlag = $licenseFlag;
        return $this;
    }

    /**
     * @return string
     */
    public function getImportFlag()
    {
        return $this->importFlag;
    }

    /**
     * @param string $importFlag
     * @return ProductInfoDat
     */
    public function setImportFlag($importFlag)
    {
        $this->importFlag = $importFlag;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param string $productType
     * @return ProductInfoDat
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitWeight()
    {
        return $this->unitWeight;
    }

    /**
     * @param string $unitWeight
     * @return ProductInfoDat
     */
    public function setUnitWeight($unitWeight)
    {
        $this->unitWeight = $unitWeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitDimension()
    {
        return $this->unitDimension;
    }

    /**
     * @param string $unitDimension
     * @return ProductInfoDat
     */
    public function setUnitDimension($unitDimension)
    {
        $this->unitDimension = $unitDimension;
        return $this;
    }

    /**
     * @return \FedExCrossBorder\Connect\Entity\CartonsDat[]
     */
    public function getItemInformation()
    {
        return $this->itemInformation;
    }

    /**
     * @param \FedExCrossBorder\Connect\Entity\CartonsDat[] $itemInformation
     * @return ProductInfoDat
     */
    public function setItemInformation($itemInformation)
    {
        $this->itemInformation = $itemInformation;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @param string $productID
     * @return ProductInfoDat
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    /**
     * @param string $countryOfOrigin
     * @return ProductInfoDat
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        $this->countryOfOrigin = $countryOfOrigin;
        return $this;
    }


}
