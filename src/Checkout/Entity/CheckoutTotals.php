<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class CheckoutTotals
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property string $currency
 * @property ProductSubtotal[] $product_subtotals
 * @property string $subtotal
 * @property CheckoutCharges $charges
 * @property string $total
 */
class CheckoutTotals extends BaseModel
{
    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\ProductSubtotal[]
     */
    public function getProductSubtotals()
    {
        return $this->product_subtotals;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\ProductSubtotal[] $product_subtotals
     * @return $this
     */
    public function setProductSubtotals($product_subtotals)
    {
        $this->product_subtotals = $product_subtotals;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param string $subtotal
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\CheckoutCharges
     */
    public function getCharges()
    {
        return $this->charges;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\CheckoutCharges $charges
     * @return $this
     */
    public function setCharges($charges)
    {
        $this->charges = $charges;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param string $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }
}
