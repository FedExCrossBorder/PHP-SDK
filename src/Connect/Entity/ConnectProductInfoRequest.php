<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 6/11/18
 * Time: 10:11 AM
 */

namespace FedExCrossBorder\Connect\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ConnectProductInfoRequest
 * @package FedExCrossBorder\Connect\Entity
 *
 * @property string $merchantKey
 * @property string $language
 * @property ProductInfoDat[] $items
 */
class ConnectProductInfoRequest extends BaseModel
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
     * @return ConnectProductInfoRequest
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
     * @return ConnectProductInfoRequest
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return ProductInfoDat[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param ProductInfoDat[] $items
     * @return ConnectProductInfoRequest
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

}
