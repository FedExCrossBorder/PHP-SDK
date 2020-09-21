<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class Cart
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property Address $billing_address
 * @property Address $shipping_address
 * @property string $domestic_shipping_charge
 * @property ShippingMethodOption $shipping_method
 * @property string $merchant_currency
 * @property boolean $charge_duty_tax
 * @property boolean $charge_loss_damage_protection
 * @property Product[] $products
 * @property int $order_transit
 * @property string $retailer_order_number
 * @property string $custom_order_1
 * @property string $custom_order_2
 * @property string $custom_order_3
 * @property CustomerAttributes $customer_attributes
 * @property MerchantAttributes $merchant_attributes
 * @property MerchantShippingMethod[] $merchant_shipping_methods
 * @property boolean $charge_insurance
 * @property integer $fulfillment_time
 */
class Cart extends BaseModel
{

    /**
     * @return \FedExCrossBorder\Checkout\Entity\Address
     */
    public function getBillingAddress()
    {
        return $this->billing_address;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\Address $billing_address
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->billing_address = $billing_address;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isValidBillingAddress()
    {
        if (empty($this->billing_address)) {
            return false;
        }
        $billing_country = $this->billing_address->getCountry();
        if (empty($billing_country)) {
            return false;
        }
        return true;
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\Address
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }

    /**
     * @return boolean
     */
    public function isValidShippingAddress()
    {
        if (empty($this->shipping_address)) {
            return false;
        }
        $shipping_country = $this->shipping_address->getCountry();
        if (empty($shipping_country)) {
            return false;
        }
        return true;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\Address $shipping_address
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->shipping_address = $shipping_address;

        return $this;
    }

    /**
     * @return string
     */
    public function getDomesticShippingCharge()
    {
        return $this->domestic_shipping_charge;
    }

    /**
     * @param string $domestic_shipping_charge
     * @return $this
     */
    public function setDomesticShippingCharge($domestic_shipping_charge)
    {
        $this->domestic_shipping_charge = $domestic_shipping_charge;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\ShippingMethodOption
     */
    public function getShippingMethod()
    {
        return $this->shipping_method;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\ShippingMethodOption $shipping_method
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->shipping_method = $shipping_method;

        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantCurrency()
    {
        return $this->merchant_currency;
    }

    /**
     * @param string $merchant_currency
     * @return $this
     */
    public function setMerchantCurrency($merchant_currency)
    {
        $this->merchant_currency = $merchant_currency;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getChargeDutyTax()
    {
        return $this->charge_duty_tax;
    }

    /**
     * @param boolean $charge_duty_tax
     * @return Cart
     */
    public function setChargeDutyTax($charge_duty_tax)
    {
        $this->charge_duty_tax = $charge_duty_tax;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getChargeLossDamageProtection()
    {
        return $this->charge_loss_damage_protection;
    }

    /**
     * @param boolean $charge_loss_damage_protection
     * @return $this
     */
    public function setChargeInsurance($charge_loss_damage_protection)
    {
        $this->charge_loss_damage_protection = $charge_loss_damage_protection;
        return $this;
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\Product[]
     */
    public function getProducts()
    {
        if($this->products == null) {
            return [];
        }
        return $this->products;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\Product[] $products
     * @return $this
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isValidProducts()
    {
        $products = $this->getProducts();
        if (!empty($products)) {
            foreach ($this->getProducts() as $product) {
                if (!$product->isValid()) {
                    return false;
                }
            }
        }
        return true;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\Product $newProduct
     * @return $this
     */
    public function addProduct($newProduct)
    {
        $products = $this->getProducts();
        $isNewProduct = true;
        foreach ($products as $product) {
            if ($product->getId() == $newProduct->getId()) {
                $product->setQuantity($product->getQuantity() + $newProduct->getQuantity());
                $isNewProduct = false;
            }
        }
        if ($isNewProduct) {
            $products[] = $newProduct;
        }
        $this->products = $products;

        return $this;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\Product $newProduct
     * @return $this
     */
    public function updateProduct($newProduct)
    {
        $products = $this->getProducts();
        foreach ($products as $index => $product) {
            if ($product->getId() == $newProduct->getId()) {
                $products[$index] = $newProduct;
            }
        }
        $this->products = $products;

        return $this;
    }

    /**
     * @param string $productId
     * @return $this
     */
    public function removeProduct($productId)
    {
        $products = $this->getProducts();
        foreach ($products as $index => $product) {
            if ($product->getId() == $productId) {
                unset($products[$index]);
            }
        }
        $this->products = $products;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrderTransit()
    {
        return $this->order_transit;
    }

    /**
     * @param int $order_transit
     * @return Cart
     */
    public function setOrderTransit($order_transit)
    {
        $this->order_transit = $order_transit;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetailerOrderNumber()
    {
        return $this->retailer_order_number;
    }

    /**
     * @param string $retailer_order_number
     * @return Cart
     */
    public function setRetailerOrderNumber($retailer_order_number)
    {
        $this->retailer_order_number = $retailer_order_number;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomOrder1()
    {
        return $this->custom_order_1;
    }

    /**
     * @param string $custom_order_1
     * @return Cart
     */
    public function setCustomOrder1($custom_order_1)
    {
        $this->custom_order_1 = $custom_order_1;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomOrder2()
    {
        return $this->custom_order_2;
    }

    /**
     * @param string $custom_order_2
     * @return Cart
     */
    public function setCustomOrder2($custom_order_2)
    {
        $this->custom_order_2 = $custom_order_2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomOrder3()
    {
        return $this->custom_order_3;
    }

    /**
     * @param string $custom_order_3
     * @return Cart
     */
    public function setCustomOrder3($custom_order_3)
    {
        $this->custom_order_3 = $custom_order_3;
        return $this;
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\CustomerAttributes
     */
    public function getCustomerAttributes()
    {
        return $this->customer_attributes;
    }

    /**
     * @return string
     */
    public function getCustomerLocale()
    {
        $attr = $this->getCustomerAttributes();
        $locale = $attr->getLocale();
        if (!empty($attr) && !empty($locale)) {
            $locale = $attr->getLocale();
        } else {
            $locale = 'en_US';
        }
        return $locale;
    }

    /**
     * @return string
     */
    public function getCustomerLanguage()
    {
        $locale = $this->getCustomerLocale();
        if (!empty($locale)) {
            $language = substr($locale, 0, 2);
        } else {
            $language = 'en';
        }
        return $language;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\CustomerAttributes $customer_attributes
     * @return $this
     */
    public function setCustomerAttributes($customer_attributes)
    {
        $this->customer_attributes = $customer_attributes;

        return $this;
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\MerchantAttributes
     */
    public function getMerchantAttributes()
    {
        return $this->merchant_attributes;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\MerchantAttributes $merchant_attributes
     * @return $this
     */
    public function setMerchantAttributes($merchant_attributes)
    {
        $this->merchant_attributes = $merchant_attributes;

        return $this;
    }

    /**
     * @return bool
     */
    public function isMerchantDirect() {
        $attr = $this->getMerchantAttributes();
        if(empty($attr)) {
            return false;
        }
        return $attr->isMerchantDirect();
    }

    /**
     * @param boolean $merchant_direct
     * #return $this
     */
    public function setMerchantDirect($merchant_direct) {
        // Update attributes object
        $attr = $this->getMerchantAttributes();
        if(empty($attr)) {
            $attr = new MerchantAttributes();
        }
        $attr->setMerchantDirect($merchant_direct);

        // Set attributes object
        $this->setMerchantAttributes($attr);
    }

    /**
     * @return \FedExCrossBorder\Checkout\Entity\MerchantShippingMethod[]
     */
    public function getMerchantShippingMethods()
    {
        return $this->merchant_shipping_methods;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\MerchantShippingMethod[] $merchant_shipping_methods
     * @return Cart
     */
    public function setMerchantShippingMethods($merchant_shipping_methods)
    {
        $this->merchant_shipping_methods = $merchant_shipping_methods;
        return $this;
    }

    /**
     * @param $change_insurance
     *
     * @return $this
     */
    public function serChargeInsurance($change_insurance)
    {
        $this->charge_insurance = $change_insurance;

        return $this;
    }

    /**
     * @return bool
     */
    public function getChargeInsurance()
    {
        return $this->charge_insurance;
    }

    /**
     * @return int
     */
    public function getFulfillmentTime()
    {
        return $this->fulfillment_time;
    }

    /**
     * @param int $fulfillment_time
     * @return Cart
     */
    public function setFulfillmentTime($fulfillment_time)
    {
        $this->fulfillment_time = $fulfillment_time;

        return $this;
    }

}
