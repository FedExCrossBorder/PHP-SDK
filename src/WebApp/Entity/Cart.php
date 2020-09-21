<?php

namespace FedExCrossBorder\WebApp\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class Cart
 *
 * @package FedExCrossBorder\WebApp\Entity
 *
 * @property \FedExCrossBorder\WebApp\Entity\Merchant $merchant
 * @property \FedExCrossBorder\WebApp\Entity\Order $order
 * @property \FedExCrossBorder\WebApp\Entity\Customer $customer
 * @property \FedExCrossBorder\WebApp\Entity\Product[] $products
 * @property \FedExCrossBorder\WebApp\Entity\ShippingMethod[] $shipping_methods
 */
class Cart extends BaseModel
{
    /**
     * @return \FedExCrossBorder\WebApp\Entity\Merchant
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @param \FedExCrossBorder\WebApp\Entity\Merchant $merchant
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->merchant = $merchant;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\WebApp\Entity\Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param \FedExCrossBorder\WebApp\Entity\Order $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\WebApp\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param \FedExCrossBorder\WebApp\Entity\Customer $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\WebApp\Entity\Product[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param \FedExCrossBorder\WebApp\Entity\Product[] $products
     * @return $this
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\WebApp\Entity\ShippingMethod[]
     */
    public function getShippingMethods()
    {
        return $this->shipping_methods;
    }

    /**
     * @param \FedExCrossBorder\WebApp\Entity\ShippingMethod[] $shipping_methods
     * @return Cart
     */
    public function setShippingMethods($shipping_methods)
    {
        $this->shipping_methods = $shipping_methods;

        return $this;
    }

}
