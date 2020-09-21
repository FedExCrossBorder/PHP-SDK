<?php

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\WebApp\Entity\Address;
use FedExCrossBorder\WebApp\Entity\Cart;
use FedExCrossBorder\WebApp\Entity\Customer;
use FedExCrossBorder\WebApp\Entity\Merchant;
use FedExCrossBorder\WebApp\Entity\Product;
use FedExCrossBorder\WebApp\WebAppClient;
use FedExCrossBorder\Auth\OAuthClient;
use FedExCrossBorder\Auth\Credentials;
use PHPUnit\Framework\TestCase;

class WebAppClientTest extends TestCase
{
    /**
     * @var WebAppClient $webAppClientWithCredentials
     */
    protected $webAppClientWithCredentials;

    /**
     * @var WebAppClient $webAppClientWithBearer
     */
    protected $webAppClientWithBearer;

    /**
     * @var OAuthClient $oauthClient
     */
    protected $oauthClient;

    public function setUp()
    {
        parent::setUp();

        $credentials = $this->getCredentials();

        $this->webAppClientWithCredentials = new WebAppClient(
            array('headers' => array('domain' => $_SERVER['FCB_WEBAPP_URL'])),
            $_SERVER['FCB_WEBAPP_URL'],
            new GuzzleHttpAdapter(),
            $credentials
        );

        $this->oauthClient = new OAuthClient($credentials, $_SERVER['FCB_OAUTH_URL']);
        $access_token = $this->oauthClient->clientCredentials();

        $this->webAppClientWithBearer = new WebAppClient(
            array('headers' => array('domain' => $_SERVER['FCB_OAUTH_URL']))
        );
        $this->webAppClientWithBearer->setAccessToken($access_token->getAccessToken());
        $this->webAppClientWithBearer->setMerchantKey($_SERVER['FCB_MERCHANT_KEY']);
    }

    /**
     * @dataProvider fullCartProvider
     * @group webapp
     * @group get-widget
     */
    public function testGetWidget($cartData)
    {
        $cart = new Cart($cartData);
        $widget = $this->webAppClientWithCredentials->getWidget($cart);

        $this->assertNotEmpty($widget);
    }

    /**
     * @dataProvider fullCartProvider
     * @group webapp
     * @group get-widget
     */
    public function testGetWidgetWithBearer($cartData)
    {
        $cart = new Cart($cartData);
        $widget = $this->webAppClientWithBearer->getWidget($cart);
        $this->assertNotEmpty($widget);
    }

    /**
     * @dataProvider merchantDirectCartProvider
     * @group webapp
     * @group get-widget-merchant-direct
     */
    public function testGetWidgetMerchantDirect($cartData)
    {
        $cart = new Cart($cartData);
        $widget = $this->webAppClientWithCredentials->getWidget($cart);

        $this->assertNotEmpty($widget);
    }

    /**
     * @group webapp
     * @group get-basic-widget
     */
    public function testBasicGetWidget()
    {
        $merchant = new Merchant();
        $merchant->setPartnerKey($_SERVER['FCB_PARTNER_KEY']);

        $product = new Product();
        $product->setId(1);
        $product->setUnitPrice("98.49");
        $product->setTotalPrice("196.98");
        $product->setQuantity(2);
        $product->setName('name 1044254');
        $product->setCountryOfOrigin('US');

        $billingAddress = new Address();
        $billingAddress->setCountry("PE");
        $customer = new Customer();
        $customer->setBilling($billingAddress);

        $order = new \FedExCrossBorder\WebApp\Entity\Order();
        $order->setOrderCurrency('USD');

        $cart = new Cart();
        $cart->setMerchant($merchant);
        $cart->setCustomer($customer);
        $cart->setOrder($order);
        $cart->setProducts(
            [
                $product,
            ]
        );

        $widget = $this->webAppClientWithCredentials->getWidget($cart);

        $this->assertNotEmpty($widget);
    }


    public function fullCartProvider()
    {
        return [
            [
                [
                    "merchant" => [
                        "partner_key" => $_SERVER['FCB_PARTNER_KEY'],
                        "lang" => "en",
                        "callback_url" => "",
                        "autoOpen" => true,
                        "enable_pinpoint" => false,
                        "join_duty_shipping" => false,
                        "change_number_items" => true,
                        "merchant_control" =>false
                    ],
                    "order" => [
                        "domestic_shipping_charge" => 0,
                        "order_currency" => "USD",
                        "order_transit" => 3,
                        "custom_order_1" => "CUSTOM_ORDER_1",
                        "custom_order_2" => "CUSTOM_ORDER_2",
                        "custom_order_3" => "CUSTOM_ORDER_3"
                    ],
                    "customer" => [
                        "billing" => [
                            "first_name" => "",
                            "last_name" => "",
                            "email" => "",
                            "phone" => "",
                            "address1" => "",
                            "address2" => "",
                            "zip" => "",
                            "city" => "",
                            "country" => "PE",
                            "state" => "",
                            "company" => ""
                        ],
                        "shipping" => [
                            "first_name" => "",
                            "last_name" => "",
                            "email" => "",
                            "phone" => "",
                            "address1" => "",
                            "address2" => "",
                            "zip" => "",
                            "city" => "",
                            "country" => "",
                            "state" => "",
                            "company" => ""
                        ]
                    ],
                    "products" => [
                        [
                            "id" => "1044254",
                            "name" => "Ray-Ban Unisex Tortoise New Wayfarer Sunglasses",
                            "quantity" => 1,
                            "unit_price" => "104.99",
                            "shipping" => "",
                            "total_price" => "104.99",
                            "image" => "https://ak1.ostkcdn.com/images/products/8028460/8028460/Ray-Ban-Unisex-Tortoise-Sunglasses-T15389861.jpg",
                            "description" => "Golden State Warriors adidas Youth 2017 Kevin Durant #35 Chinese Heritage Replica Jersey - White - YM",
                            "country_of_origin" => "PE",
                            "distribution_country" => "US",
                            "distribution_zip" => "",
                            "product_transit" => 4,
                            "custom_1" => "",
                            "custom_2" => "",
                            "custom_3" => "",
                            "retail_price" => 104.99
                        ], [
                            "id" => "1044355",
                            "name" => "Gearonic Men's Vintage Satchel School Military Messenger Shoulder Bag",
                            "quantity" => 1,
                            "unit_price" => "59.99",
                            "shipping" => "",
                            "total_price" => "59.99",
                            "image" => "https://ak1.ostkcdn.com/images/products/10914237/T17945298.jpg",
                            "description" => "Golden State Warriors adidas Youth 2017 Kevin Durant #35 Chinese Heritage Replica Jersey - White - YM",
                            "country_of_origin" => "PE",
                            "distribution_country" => "US",
                            "distribution_zip" => "",
                            "product_transit" => 4,
                            "custom_1" => "",
                            "custom_2" => "",
                            "custom_3" => "",
                            "retail_price" => 59.99
                        ], [
                            "id" => "1111",
                            "name" => "Joshua & Sons Men's Quartz Date Strap Watch Set",
                            "quantity" => 1,
                            "unit_price" => "98.49",
                            "shipping" => "",
                            "total_price" => "98.49\"",
                            "image" => "https://ak1.ostkcdn.com/images/products/10840238/T17881798.jpg",
                            "description" => "Golden State Warriors adidas Youth 2017 Kevin Durant #35 Chinese Heritage Replica Jersey - White - YM",
                            "country_of_origin" => "PE",
                            "distribution_country" => "US",
                            "distribution_zip" => "",
                            "product_transit" => 4,
                            "custom_1" => "",
                            "custom_2" => "",
                            "custom_3" => "",
                            "retail_price" => 98.49
                        ]
                    ]
                ]
            ]
        ];
    }


    public function merchantDirectCartProvider()
    {
        return [
            [
                [
                    "merchant" => [
                        "partner_key" => $_SERVER['FCB_PARTNER_KEY'],
                        "lang" => "en",
                        "callback_url" => "",
                        "autoOpen" => true,
                        "enable_pinpoint" => false,
                        "join_duty_shipping" => false,
                        "change_number_items" => true,
                        "merchant_direct" => true,
                    ],
                    "order" => [
                        "domestic_shipping_charge" => 0,
                        "order_currency" => "USD",
                        "order_transit" => 3,
                        "custom_order_1" => "CUSTOM_ORDER_1",
                        "custom_order_2" => "CUSTOM_ORDER_2",
                        "custom_order_3" => "CUSTOM_ORDER_3"
                    ],
                    "customer" => [
                        "billing" => [
                            "first_name" => "",
                            "last_name" => "",
                            "email" => "",
                            "phone" => "",
                            "address1" => "",
                            "address2" => "",
                            "zip" => "",
                            "city" => "",
                            "country" => "PE",
                            "state" => "",
                            "company" => ""
                        ],
                        "shipping" => [
                            "first_name" => "",
                            "last_name" => "",
                            "email" => "",
                            "phone" => "",
                            "address1" => "",
                            "address2" => "",
                            "zip" => "LIMA 17",
                            "city" => "LIMA",
                            "country" => "PE",
                            "state" => "LIMA",
                            "company" => ""
                        ]
                    ],
                    "products" => [
                        [
                            "id" => "1111",
                            "name" => "Fluval 3 Plus Foam Insert (4pk) x 12pk",
                            "quantity" => 1,
                            "unit_price" => 29.33,
                            "shipping" => 0,
                            "total_price" => 29.33,
                            "image" => "http://www.windsongwindchimes.com/assets/images/birdhouses/12606_4239859304_full.jpg",
                            "description" => "Fluval 3 Plus Foam Insert (4pk) x 12pk",
                            "country_of_origin" => "PE",
                            "distribution_country" => "US",
                            "distribution_zip" => "",
                            "product_transit" => 2,
                            "custom_1" => "",
                            "custom_2" => "",
                            "custom_3" => "",
                            "retail_price" => 104.99,
                            "sw" => "more",
                            "indice" => 1,

                        ], [
                            "id" => "12331825",
                            "name" => "Brass-finished solid metal caseTwo-tone",
                            "quantity" => 1,
                            "unit_price" => 89.95,
                            "shipping" => 0,
                            "total_price" => 89.95,
                            "image" => "https://images-na.ssl-images-amazon.com/images/I/81uf1iQOioL._AC_UL320_SR274,320_.jpg",
                            "description" => "Brass-finished solid metal caseTwo-tone floating dialClear protective lensEngraving plate includedFree battery as your gift with purchase - Requires 1 AA batteryWeight is approximately 2.8 lbs7.75\" High x 8\" x Wide...",
                            "country_of_origin" => "JP",
                            "distribution_country" => "US",
                            "distribution_zip" => "",
                            "product_transit" => 2,
                            "custom_1" => "Brass-finished solid metal caseTwo-tone floating dialClear protective lensEngraving plate includedFree battery",
                            "custom_2" => "purchase - Requires 1 AA batteryWeight is approximately 2.8 lbs7.75\" High x 8\" x Wide",
                            "custom_3" => "",
                            "retail_price" => 89.95,
                            "sw" => "more",
                            "indice" => 2,
                        ], [
                            "id" => "12331826",
                            "name" => "Brasstone metal case, brushed and polished finish",
                            "quantity" => 1,
                            "unit_price" => 59.95,
                            "shipping" => 0,
                            "total_price" => 59.95,
                            "image" => "https://s-media-cache-ak0.pinimg.com/736x/85/d4/d9/85d4d90737867ad1daf13d6ebbda1d37.jpg",
                            "description" => "Brasstone metal case, brushed and polished finish. Decorative fluted sides. Floating metal dial with bright polished circular accents. Clear protective lens. 3.75\" x .75\" engraving plate included. Requires (1) AA battery...",
                            "country_of_origin" => "JP",
                            "distribution_country" => "US",
                            "distribution_zip" => "",
                            "product_transit" => 2,
                            "custom_1" => "Brasstone metal case, brushed and polished finish. Decorative fluted sides",
                            "custom_2" => "Floating metal dial with bright polished circular accents. Clear protective lens. 3.75\" x .75\" engraving plate included. Requires (1) AA battery",
                            "custom_3" => "",
                            "retail_price" => 59.95,
                            "sw" => "more",
                            "indice" => 3,
                        ]
                    ],
                    "shipping_methods" => [
                        [
                            "code" => 1001,
                            "name" => "etn 0",
                            "transit_time" => 9,
                            "dutiable_transit_cost" => 100,
                            "charged_transit_cost" => 75,
                            "sort_index" => 1,
                            "service_level_category" => 3
                        ], [
                            "code" => 455,
                            "name" => "Standard 0",
                            "transit_time" => 6,
                            "delivery_date" => "2017-03-17",
                            "dutiable_transit_cost" => 100,
                            "sort_index" => 0,
                            "service_level_category" => 2
                        ], [
                            "code" => 2,
                            "name" => "Express",
                            "transit_time" => 3,
                            "dutiable_transit_cost" => 100,
                            "charged_transit_cost" => 30,
                            "charged_transit_cost_message" => "10 Discount` Message",
                            "sort_index" => 3,
                            "service_level_category" => 1
                        ], [
                            "code" => 21,
                            "name" => "Express 0",
                            "transit_time" => 3,
                            "dutiable_transit_cost" => 100,
                            "charged_transit_cost" => 20,
                            "charged_transit_cost_message" => "10 Discount` Message",
                            "sort_index" => 4,
                            "service_level_category" => 3
                        ], [
                            "code" => 22,
                            "name" => "Express 1",
                            "transit_time" => 3,
                            "dutiable_transit_cost" => 100,
                            "charged_transit_cost" => 50,
                            "charged_transit_cost_message" => "10 Discount` Message",
                            "sort_index" => 5,
                            "service_level_category" => 2
                        ], [
                            "code" => 223,
                            "name" => "Express 2",
                            "transit_time" => 3,
                            "dutiable_transit_cost" => 100,
                            "charged_transit_cost" => 96,
                            "charged_transit_cost_message" => "10 Discount` Message",
                            "sort_index" => 6,
                            "service_level_category" => 1
                        ]
                    ]
                ]
            ]
        ];
    }

    /**
     * @return Credentials
     */
    private function getCredentials()
    {
        return new Credentials($_SERVER['FCB_CLIENT_ID'], $_SERVER['FCB_CLIENT_SECRET'], $_SERVER['FCB_MERCHANT_KEY']);
    }
}
