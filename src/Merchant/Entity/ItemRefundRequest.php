<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 30/10/18
 * Time: 03:44 PM
 */

namespace FedExCrossBorder\Merchant\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ItemRefundRequest
 * @package FedExCrossBorder\Merchant\Entity
 *
 * @property string $order_number
 * @property string $charged_transit_cost
 * @property string $dutiable_transit_cost
 * @property string $user
 * @property string $merchant_note
 * @property BoxItem[] $items
 */
class ItemRefundRequest extends BaseModel
{
    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->order_number;
    }

    /**
     * @param string $order_number
     * @return ItemRefundRequest
     */
    public function setOrderNumber($order_number)
    {
        $this->order_number = $order_number;
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
     * @return ItemRefundRequest
     */
    public function setChargedTransitCost($charged_transit_cost)
    {
        $this->charged_transit_cost = $charged_transit_cost;
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
     * @return ItemRefundRequest
     */
    public function setDutiableTransitCost($dutiable_transit_cost)
    {
        $this->dutiable_transit_cost = $dutiable_transit_cost;
        return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     * @return ItemRefundRequest
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantNote()
    {
        return $this->merchant_note;
    }

    /**
     * @param string $merchant_note
     * @return ItemRefundRequest
     */
    public function setMerchantNote($merchant_note)
    {
        $this->merchant_note = $merchant_note;
        return $this;
    }

    /**
     * @return BoxItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param BoxItem[] $items
     * @return ItemRefundRequest
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }
}
