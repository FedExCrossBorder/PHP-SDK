<?php

namespace FedExCrossBorder\Checkout;

use FedExCrossBorder\AbstractFedExCrossBorder;
use FedExCrossBorder\Adapter\AdapterInterface;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Checkout\Entity\Address;
use FedExCrossBorder\Checkout\Entity\AvailableCountries;
use FedExCrossBorder\Checkout\Entity\AvailableLanguages;
use FedExCrossBorder\Checkout\Entity\AvailablePaymentMethods;
use FedExCrossBorder\Checkout\Entity\AvailableShippingMethods;
use FedExCrossBorder\Checkout\Entity\Cart;
use FedExCrossBorder\Checkout\Entity\Checkout;
use FedExCrossBorder\Checkout\Entity\CustomerAttributes;
use FedExCrossBorder\Checkout\Entity\Product;
use FedExCrossBorder\Checkout\Entity\ShippingMethodOption;
use FedExCrossBorder\ConfigTrait;

class CheckoutClient extends AbstractFedExCrossBorder
{
    use ConfigTrait;

    const CHECKOUT = 'v2/checkout';

    /**
     * CheckoutClient constructor.
     *
     * @example tests/Checkout/CheckoutClientTest.php 27 5 Creating a Checkout client
     *
     * @inheritdoc
     */
    public function __construct($apiUrl = null, AdapterInterface $adapter = null, Credentials $credentials = null, $config = array())
    {
        if (empty($apiUrl)) {
            $apiUrl = $this->getCheckoutApiUrl();
        }

        parent::__construct($credentials, $adapter, $apiUrl, $config);
    }

    /**
     * Create a Checkout using a predefined cart object
     *
     * @example tests/Checkout/CheckoutClientTest.php 53 2 Creating a Checkout
     *
     * @param Cart $cart
     * @return Checkout
     */
    public function createCheckout(Cart $cart)
    {
        $content = $this->adapter
            ->post(
                sprintf("%s/%s", $this->apiUrl, self::CHECKOUT),
                $cart->toJSON(128)
            );

        return new Checkout($content);
    }

    /**
     * Get the Checkout instance from an id
     *
     * @param $checkout_id
     * @return Checkout
     */
    public function getCheckout($checkout_id)
    {
        $content = $this->adapter
            ->get(
                sprintf("%s/%s/%s", $this->apiUrl, self::CHECKOUT, $checkout_id)
            );

        return new Checkout($content);
    }

    /**
     * Add a new product to a created checkout instance
     *
     * @example tests/Checkout/CheckoutClientTest.php 80 10 Adding a new product
     *
     * @param $checkout_id
     * @param Product $product
     * @return Checkout
     */
    public function addItem($checkout_id, Product $product)
    {
        $url = sprintf("%s/%s/%s/items", $this->apiUrl, self::CHECKOUT, $checkout_id);
        $content = $this->adapter
            ->post(
                $url,
                $product->toJSON(128)
            )
        ;

        return new Checkout($content);
    }

    /**
     * Update a created product in a created checkout instance
     *
     * @param $checkout_id
     * @param Product $product
     * @return Checkout
     */
    public function updateItem($checkout_id, Product $product)
    {
        $url = sprintf("%s/%s/%s/items/%s", $this->apiUrl, self::CHECKOUT, $checkout_id, $product->getId());
        $content = $this->adapter
            ->put(
                $url,
                $product->toJSON(128)
            )
        ;

        return new Checkout($content);
    }

    /**
     * Update a created product in a created checkout instance
     *
     * @param $checkout_id
     * @param string $productId
     */
    public function deleteItem($checkout_id, $productId)
    {
        $url = sprintf("%s/%s/%s/items/%s", $this->apiUrl, self::CHECKOUT, $checkout_id, $productId);
        $this->adapter->delete($url);
    }

    /**
     * Update the customer shipping address in a created checkout instance
     *
     * @example tests/Checkout/CheckoutClientTest.php 113 21 Adding a new product
     *
     * @param $checkout_id
     * @param Address $address
     * @return Checkout
     */
    public function updateShippingAddress($checkout_id, Address $address)
    {
        $url = sprintf("%s/%s/%s/shippingAddress", $this->apiUrl, self::CHECKOUT, $checkout_id);
        $content = $this->adapter
            ->put(
                $url,
                $address->toJSON(128)
            )
        ;
        return new Checkout($content);
    }

    /**
     * Update the customer billing address in a created checkout instance
     *
     * @param $checkout_id
     * @param Address $address
     * @return Checkout
     */
    public function updateBillingAddress($checkout_id, Address $address)
    {
        $url = sprintf("%s/%s/%s/billingAddress", $this->apiUrl, self::CHECKOUT, $checkout_id);
        $content = $this->adapter
            ->put(
                $url,
                $address->toJSON(128)
            )
        ;
        return new Checkout($content);
    }

    /**
     * Update the customer shipping address in a created checkout instance
     *
     * @example tests/Checkout/CheckoutClientTest.php 205 7 Update shipping method
     *
     * @param $checkout_id
     * @param ShippingMethodOption $shippingMethodOption
     * @return Checkout
     */
    public function updateShippingMethod($checkout_id, ShippingMethodOption $shippingMethodOption)
    {
        $url = sprintf("%s/%s/%s/shippingMethod", $this->apiUrl, self::CHECKOUT, $checkout_id);
        $content = $this->adapter
            ->put(
                $url,
                $shippingMethodOption->toJSON(128)
            )
        ;
        return new Checkout($content);
    }

    /**
     * Proceed to pay a created checkout instance
     *
     * @example tests/Checkout/CheckoutClientTest.php 223 4 Proceed to pay
     *
     * @param $checkout_id
     * @param $payment
     * @return mixed
     */
    public function pay($checkout_id, $payment)
    {
        $content = $this->adapter
            ->post(
                sprintf("%s/%s/%s/pay", $this->apiUrl, self::CHECKOUT, $checkout_id),
                json_encode($payment)
            )
        ;

        return json_decode($content, true);
    }

    /**
     * Update the custom attribures in a created checkout instance
     *
     * @param $checkout_id
     * @param CustomerAttributes $customerAttributes
     * @return Checkout
     */
    public function updateCustomerAttributes($checkout_id, CustomerAttributes $customerAttributes)
    {
        $url = sprintf("%s/%s/%s/customerAttributes", $this->apiUrl, self::CHECKOUT, $checkout_id);
        $content = $this->adapter
            ->put(
                $url,
                $customerAttributes->toJSON(128)
            )
        ;
        return new Checkout($content);
    }

    /**
     * Get all available shipping methods in a created checkout instance
     *
     * @param $checkout_id
     * @return AvailableShippingMethods
     */
    public function getAvailableShippingMethods($checkout_id)
    {
        $content = $this->adapter
            ->get(
                sprintf("%s/%s/%s/availableShippingMethods", $this->apiUrl, self::CHECKOUT, $checkout_id)
            )
        ;

        return new AvailableShippingMethods($content);
    }

    /**
     * Get all available payment methods in a created checkout instance
     *
     * @param $checkout_id
     * @return AvailablePaymentMethods
     */
    public function getAvailablePaymentMethods($checkout_id)
    {
        $content = $this->adapter
            ->get(
                sprintf("%s/%s/%s/availablePaymentMethods", $this->apiUrl, self::CHECKOUT, $checkout_id)
            )
        ;

        return new AvailablePaymentMethods($content);
    }

    /**
     * Get all available countries configured by partner
     *
     * @example tests/Checkout/CheckoutClientTest.php 297 1 Get available countries by partner
     *
     * @return AvailableCountries
     */
    public function getAvailableCountries()
    {
        $content = $this->adapter
            ->get(
                sprintf("%s/%s/availableCountries", $this->apiUrl, self::CHECKOUT)
            )
        ;

        return new AvailableCountries($content);
    }

    /**
     * Get all available languages configured by partner
     *
     * @return AvailableLanguages
     */
    public function getAvailableLanguages()
    {
        $content = $this->adapter
            ->get(
                sprintf("%s/%s/availableLanguages", $this->apiUrl, self::CHECKOUT)
            )
        ;

        return new AvailableLanguages($content);
    }

    /**
     * Made changes about cart in checkout
     *
     * @param Cart $cart
     * @param $checkoutId
     * @return Checkout
     */
    public function updateCart(Cart $cart, $checkoutId)
    {
        $content = $this->adapter
            ->patch(
                sprintf("%s/%s/%s", $this->apiUrl, self::CHECKOUT, $checkoutId),
                $cart->toJSON(128)
            )
        ;

        return new Checkout($content);
    }

    /**
     * Complete order
     *
     * @param $checkout_id
     * @return Checkout
     */
    public function checkoutComplete($checkout_id)
    {
        $url = sprintf("%s/%s/%s/complete", $this->apiUrl, self::CHECKOUT, $checkout_id);
        $content = $this->adapter->post($url);

        return new Checkout($content);
    }


    /**
     * @param $from
     * @param $to
     * @return string
     */
    public function getExchangeRates($from, $to)
    {
        $url = sprintf("%s/%s/exchangeRates?from=%s&to=%s", $this->apiUrl, self::CHECKOUT, $from, $to);

        return $this->adapter->get($url);
    }
}
