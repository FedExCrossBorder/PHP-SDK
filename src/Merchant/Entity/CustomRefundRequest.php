<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 30/10/18
 * Time: 03:54 PM
 */

namespace FedExCrossBorder\Merchant\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class CustomRefundRequest
 * @package FedExCrossBorder\Merchant\Entity
 *
 * @property string $order_number
 * @property string $custom_refund_amount
 * @property integer $refund_reason_code
 * @property string $user
 * @property string $merchant_note
 */
class CustomRefundRequest extends BaseModel
{
    /**
     * @return string
     */
    public function getCustomRefundAmount()
    {
        return $this->custom_refund_amount;
    }

    /**
     * @param string $custom_refund_amount
     * @return CustomRefundRequest
     */
    public function setCustomRefundAmount($custom_refund_amount)
    {
        $this->custom_refund_amount = $custom_refund_amount;
        return $this;
    }
    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->order_number;
    }

    /**
     * @param string $order_number
     * @return CustomRefundRequest
     */
    public function setOrderNumber($order_number)
    {
        $this->order_number = $order_number;
        return $this;
    }

    /**
     * @return int
     */
    public function getRefundReasonCode()
    {
        return $this->refund_reason_code;
    }

    /**
     * @param int $refund_reason_code
     * @return CustomRefundRequest
     */
    public function setRefundReasonCode($refund_reason_code)
    {
        $this->refund_reason_code = $refund_reason_code;
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
     * @return CustomRefundRequest
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
     * @return CustomRefundRequest
     */
    public function setMerchantNote($merchant_note)
    {
        $this->merchant_note = $merchant_note;
        return $this;
    }

}
