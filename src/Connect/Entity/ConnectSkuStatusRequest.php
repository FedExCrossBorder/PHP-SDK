<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 6/11/18
 * Time: 09:37 AM
 */

namespace FedExCrossBorder\Connect\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ConnectSkuStatusRequest
 * @package FedExCrossBorder\Connect\Entity
 *
 * @property string $merchantKey
 * @property string $language
 * @property ProductsIdDat[] $items
 */
class ConnectSkuStatusRequest extends BaseModel
{
    /**
     * @return string
     */
    public function getMerchantKey()
    {
        return $this->merchantKey;
    }

    /**
     * @param string $merchantKey
     * @return ConnectSkuStatusRequest
     */
    public function setMerchantKey($merchantKey)
    {
        $this->merchantKey = $merchantKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return ConnectSkuStatusRequest
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return ProductsIdDat[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param ProductsIdDat[] $items
     * @return ConnectSkuStatusRequest
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

}