<?php

namespace FedExCrossBorder\WebApp\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class Merchant
 *
 * @package FedExCrossBorder\WebApp\Entity
 *
 * @property string $partner_key
 * @property string $lang
 * @property string $open_class
 * @property string $callback_url
 * @property boolean $autoOpen
 * @property boolean $enable_pinpoint
 * @property boolean $join_duty_shipping
 * @property boolean $change_number_items
 * @property boolean $merchant_direct
 * @property boolean $merchant_control
 */
class Merchant extends BaseModel
{
    /**
     * @return string
     */
    public function getPartnerKey()
    {
        return $this->partner_key;
    }

    /**
     * @param string $partner_key
     * @return $this
     */
    public function setPartnerKey($partner_key)
    {
        $this->partner_key = $partner_key;

        return $this;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     * @return $this
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * @return string
     */
    public function getOpenClass()
    {
        return $this->open_class;
    }

    /**
     * @param string $open_class
     * @return $this
     */
    public function setOpenClass($open_class)
    {
        $this->open_class = $open_class;

        return $this;
    }

    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callback_url;
    }

    /**
     * @param string $callback_url
     * @return $this
     */
    public function setCallbackUrl($callback_url)
    {
        $this->callback_url = $callback_url;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAutoOpen()
    {
        return $this->autoOpen;
    }

    /**
     * @param bool $autoOpen
     * @return $this
     */
    public function setAutoOpen($autoOpen)
    {
        $this->autoOpen = $autoOpen;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isEnablePinpoint()
    {
        return $this->enable_pinpoint;
    }

    /**
     * @param bool $enable_pinpoint
     * @return Merchant
     */
    public function setEnablePinpoint($enable_pinpoint)
    {
        $this->enable_pinpoint = $enable_pinpoint;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isJoinDutyShipping()
    {
        return $this->join_duty_shipping;
    }

    /**
     * @param boolean $join_duty_shipping
     * @return Merchant
     */
    public function setJoinDutyShipping($join_duty_shipping)
    {
        $this->join_duty_shipping = $join_duty_shipping;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isChangeNumberItems()
    {
        return $this->change_number_items;
    }

    /**
     * @param boolean $change_number_items
     * @return Merchant
     */
    public function setChangeNumberItems($change_number_items)
    {
        $this->change_number_items = $change_number_items;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isMerchantDirect()
    {
        return $this->merchant_direct;
    }

    /**
     * @param boolean $merchant_direct
     * @return Merchant
     */
    public function setMerchantDirect($merchant_direct)
    {
        $this->merchant_direct = $merchant_direct;

        return $this;
    }

    /**
     * @return bool
     */
    public function isMerchantControl()
    {
        return $this->merchant_control;
    }

    /**
     * @param bool $merchant_control
     * @return Merchant
     */
    public function setMerchantControl($merchant_control)
    {
        $this->merchant_control = $merchant_control;

        return $this;
    }


}
