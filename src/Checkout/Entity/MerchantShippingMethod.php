<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class MerchantShippingMethod
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property string $code
 * @property string $name
 * @property int $transit_time
 * @property string $dutiable_transit_cost
 * @property string $charged_transit_cost
 * @property string $charged_transit_cost_message
 * @property int $service_level_category
 * @property int $sort_index
 */
class MerchantShippingMethod extends BaseModel
{
    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return MerchantShippingMethod
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return MerchantShippingMethod
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransitTime()
    {
        return $this->transit_time;
    }

    /**
     * @param int $transit_time
     * @return MerchantShippingMethod
     */
    public function setTransitTime($transit_time)
    {
        $this->transit_time = $transit_time;
        return $this;
    }

    /**
     * @return string
     */
    public function getDutiableTransitCost()
    {
        return $this->dutiable_transit_cost;
    }

    /**
     * @param string $dutiable_transit_cost
     * @return MerchantShippingMethod
     */
    public function setDutiableTransitCost($dutiable_transit_cost)
    {
        $this->dutiable_transit_cost = $dutiable_transit_cost;
        return $this;
    }

    /**
     * @return string
     */
    public function getChargedTransitCost()
    {
        return $this->charged_transit_cost;
    }

    /**
     * @param string $charged_transit_cost
     * @return MerchantShippingMethod
     */
    public function setChargedTransitCost($charged_transit_cost)
    {
        $this->charged_transit_cost = $charged_transit_cost;
        return $this;
    }

    /**
     * @return string
     */
    public function getChargedTransitCostMessage()
    {
        return $this->charged_transit_cost_message;
    }

    /**
     * @param string $charged_transit_cost_message
     * @return MerchantShippingMethod
     */
    public function setChargedTransitCostMessage($charged_transit_cost_message)
    {
        $this->charged_transit_cost_message = $charged_transit_cost_message;
        return $this;
    }

    /**
     * @return int
     */
    public function getServiceLevelCategory()
    {
        return $this->service_level_category;
    }

    /**
     * @param int $service_level_category
     * @return MerchantShippingMethod
     */
    public function setServiceLevelCategory($service_level_category)
    {
        $this->service_level_category = $service_level_category;
        return $this;
    }

    /**
     * @return int
     */
    public function getSortIndex()
    {
        return $this->sort_index;
    }

    /**
     * @param int $sort_index
     * @return MerchantShippingMethod
     */
    public function setSortIndex($sort_index)
    {
        $this->sort_index = $sort_index;
        return $this;
    }

}