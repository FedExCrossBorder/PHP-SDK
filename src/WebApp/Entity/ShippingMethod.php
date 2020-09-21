<?php

namespace FedExCrossBorder\WebApp\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ShippingMethod
 *
 * @package FedExCrossBorder\WebApp\Entity
 *
 * @property integer $code
 * @property string $name
 * @property integer $transit_time
 * @property string $delivery_date
 * @property float $dutiable_transit_cost
 * @property float $charged_transit_cost
 * @property string $charged_transit_cost_message
 * @property integer $sort_index
 * @property integer $service_level_category
 */
class ShippingMethod extends BaseModel
{
    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param integer $code
     * @return ShippingMethod
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
     * @return ShippingMethod
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return integer
     */
    public function getTransitTime()
    {
        return $this->transit_time;
    }

    /**
     * @param integer $transit_time
     * @return ShippingMethod
     */
    public function setTransitTime($transit_time)
    {
        $this->transit_time = $transit_time;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->delivery_date;
    }

    /**
     * @param string $delivery_date
     * @return ShippingMethod
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->delivery_date = $delivery_date;

        return $this;
    }

    /**
     * @return float
     */
    public function getDutiableTransitCost()
    {
        return $this->dutiable_transit_cost;
    }

    /**
     * @param float $dutiable_transit_cost
     * @return ShippingMethod
     */
    public function setDutiableTransitCost($dutiable_transit_cost)
    {
        $this->dutiable_transit_cost = $dutiable_transit_cost;

        return $this;
    }

    /**
     * @return float
     */
    public function getChargedTransitCost()
    {
        return $this->charged_transit_cost;
    }

    /**
     * @param float $charged_transit_cost
     * @return ShippingMethod
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
     * @return ShippingMethod
     */
    public function setChargedTransitCostMessage($charged_transit_cost_message)
    {
        $this->charged_transit_cost_message = $charged_transit_cost_message;

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
     * @param integer $sort_index
     * @return ShippingMethod
     */
    public function setSortIndex($sort_index)
    {
        $this->sort_index = $sort_index;

        return $this;
    }

    /**
     * @return integer
     */
    public function getServiceLevelCategory()
    {
        return $this->service_level_category;
    }

    /**
     * @param integer $service_level_category
     * @return ShippingMethod
     */
    public function setServiceLevelCategory($service_level_category)
    {
        $this->service_level_category = $service_level_category;

        return $this;
    }
}
