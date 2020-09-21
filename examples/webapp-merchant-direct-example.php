<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php');
require_once('config.php');//Include your credentials file.

use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Auth\OAuthClient;
use FedExCrossBorder\WebApp\WebAppClient;
use FedExCrossBorder\WebApp\Entity\Merchant;
use FedExCrossBorder\WebApp\Entity\Product;
use FedExCrossBorder\WebApp\Entity\Address;
use FedExCrossBorder\WebApp\Entity\Customer;
use FedExCrossBorder\WebApp\Entity\Cart;
use FedExCrossBorder\WebApp\Entity\Order;
use FedExCrossBorder\WebApp\Entity\ShippingMethod;

// Building an Oauth Client
$credentials        = new Credentials( CLIENT_ID, CLIENT_SECRET, PARTNER_KEY );
$oauthClient        = new OAuthClient( $credentials, API_OAUTH_URL );
$access_token       = $oauthClient->clientCredentials();

// Building a Client with access Token - Credentials are used only once, and the access Token is sent on each new request
$webAppClient = new WebAppClient(
    array( 'headers' => array( 'domain' => 'YOUR_DOMAIN' ) )
);
$webAppClient->setAccessToken( $access_token->getAccessToken() );
$webAppClient->setPartnerKey( PARTNER_KEY );

// Merchant Config for Merchant Direct
$merchant = new Merchant();
$merchant->setPartnerKey( PARTNER_KEY );
$merchant->setMerchantDirect(true);

// Order
$order = new Order();
$order->setOrderCurrency("USD");

// Products
$product = new Product();
$product->setId('FXB-demoWebapp-1');
$product->setName('Test product');
$product->setUnitPrice(98.49);
$product->setCountryOfOrigin('CN');
$product->setQuantity(2);

// Billing Address
$billingAddress = new Address();
$billingAddress->setCountry('CA');

// Shipping Address is Mandatory in Merchant Direct
$shippingAddress = new Address();
$shippingAddress->setFirstName('John');
$shippingAddress->setLastName('Doe');
$shippingAddress->setCompany('My Biz');
$shippingAddress->setAddress1('10-123 1/2 MAIN STREET NW');
$shippingAddress->setAddress2('MONTREAL QC H3Z 2Y7');
$shippingAddress->setCity('Montreal');
$shippingAddress->setCountry('CA');
$shippingAddress->setState('Quebec');
$shippingAddress->setZip('H3Z 2Y7');
$shippingAddress->setPhone('1-514-888-9999');
$shippingAddress->setEmail('john.doe@mybiz.com');

// Shipping Methods are Mandatory in Merchant Direct
$shippingMethods = [
        new ShippingMethod([
            "code" => 1001,
            "name" => "Custom Standard",
            "transit_time" => 9,
            "dutiable_transit_cost" => 100,
            "charged_transit_cost" => 75,
            "sort_index" => 0,
            "service_level_category" => 3
        ]),
        new ShippingMethod([
            "code" => 1002,
            "name" => "Custom Express",
            "transit_time" => 6,
            "dutiable_transit_cost" => 100,
            "sort_index" => 1,
            "service_level_category" => 2
        ])
    ];

// Customer Info
$customer = new Customer();
$customer->setBilling($billingAddress);
$customer->setShipping($shippingAddress);

// Cart Creation
$cart = new Cart();
$cart->setMerchant($merchant);
$cart->setOrder($order);
$cart->setCustomer($customer);
$cart->setProducts([
        $product,
    ]
);
$cart->setShippingMethods($shippingMethods);

// Get Widget
$widget = $webAppClient->getWidget($cart);

?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <button type="button" class="btn btn-success fcb_web_app">
            Proceed to Secure Checkout
        </button>

        <footer>
            <!-- START FedEx® Cross Border Widget -->
            <div id="partner-fcb-container">
                <?php echo $widget; ?>
            </div>
            <!-- END FedEx® Cross Border Widget -->
        </footer>
    </body>
</html>