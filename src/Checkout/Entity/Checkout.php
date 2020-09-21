<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class Checkout
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property string $checkout_id
 * @property Cart $cart
 * @property ShippingMethod[] $available_shipping_methods
 * @property PaymentMethod[] $available_payment_methods
 * @property CheckoutTotals $totals
 * @property CheckoutTotals $merchant_totals
 * @property string $status
 * @property string $order_id
 * @property CheckoutError $error
 * @property Extra $extra
 */
class Checkout extends BaseModel
{
    /**
     * @return string
     */
    public function getCheckoutId()
    {
        return $this->checkout_id;
    }

    /**
     * @param string $checkout_id
     * @return $this
     */
    public function setCheckoutId($checkout_id)
    {
        $this->checkout_id = $checkout_id;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\Cart
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\Cart $cart
     * @return $this
     */
    public function setCart($cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\ShippingMethod[]
     */
    public function getAvailableShippingMethods()
    {
        return $this->available_shipping_methods;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\ShippingMethod[] $available_shipping_methods
     * @return $this
     */
    public function setAvailableShippingMethods($available_shipping_methods)
    {
        $this->available_shipping_methods = $available_shipping_methods;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\PaymentMethod[]
     */
    public function getAvailablePaymentMethods()
    {
        return $this->available_payment_methods;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\PaymentMethod[] $available_payment_methods
     * @return $this
     */
    public function setAvailablePaymentMethods($available_payment_methods)
    {
        $this->available_payment_methods = $available_payment_methods;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\CheckoutTotals
     */
    public function getTotals()
    {
        return $this->totals;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\CheckoutTotals $totals
     * @return $this
     */
    public function setTotals($totals)
    {
        $this->totals = $totals;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\CheckoutTotals
     */
    public function getMerchantTotals()
    {
        return $this->merchant_totals;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\CheckoutTotals $merchant_totals
     * @return $this
     */
    public function setMerchantTotals($merchant_totals)
    {
        $this->merchant_totals = $merchant_totals;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\Extra
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\Extra $extra
     * @return $this
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param string $order_id
     * @return Checkout
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\CheckoutError
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\CheckoutError $error
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }
}
