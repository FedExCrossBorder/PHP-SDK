<?php
require_once('../vendor/autoload.php');
require_once('config.php');//Include your credentials file.

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Auth\OAuthClient;
use FedExCrossBorder\WebApp\WebAppClient;
use FedExCrossBorder\WebApp\Entity\Merchant;
use FedExCrossBorder\WebApp\Entity\Product;
use FedExCrossBorder\WebApp\Entity\Address;
use FedExCrossBorder\WebApp\Entity\Customer;
use FedExCrossBorder\WebApp\Entity\Cart;
use FedExCrossBorder\WebApp\Entity\Order;

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

//MERCHANT CONFIG
$merchant       = new Merchant();
$merchant->setPartnerKey( PARTNER_KEY );

//ORDER
$order = new Order();
$order->setOrderCurrency("USD");

//PRODUCTS
$product        = new Product();
$product->setId( "FXB-demoWebapp-1" );
$product->setName( "Test product" );
$product->setUnitPrice( 98.49 );
$product->setCountryOfOrigin( "CN" );
$product->setQuantity( 2 );

//BILLING ADDRESS
$billingAddress = new Address();
$billingAddress->setCountry( "CA" );

//CUSTOMER INFO
$customer       = new Customer();
$customer->setBilling( $billingAddress );

//CART CREATION
$cart           = new Cart();
$cart->setMerchant( $merchant );
$cart->setOrder( $order );
$cart->setCustomer( $customer );
$cart->setProducts(
  [
    $product,
  ]
);

//GET WIDGET
$widget = $webAppClient->getWidget( $cart );

?>
<!DOCTYPE html>
<html>
    <!-- START Optional Meta declaration for responsiveness - Include the w3mobile.css file in your sources -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3mobile.css">
    <!-- END Optional Meta declaration for responsiveness  -->

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