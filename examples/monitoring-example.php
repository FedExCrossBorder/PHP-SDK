<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php');
require_once('config.php');

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Tracking\Entity\CustomerInfo;
use FedExCrossBorder\Tracking\Entity\MerchantCredential;
use FedExCrossBorder\Tracking\Entity\TrackingParam;
use FedExCrossBorder\Tracking\TrackingClient;
use PHPUnit\Framework\TestCase;

$credentials  = new Credentials( CLIENT_ID, CLIENT_SECRET, PARTNER_KEY );
$guzzleAdapter = new GuzzleHttpAdapter();

$trackingClient = new TrackingClient($credentials, $guzzleAdapter);

$trackingParam = new TrackingParam();
$merchantCredential = new MerchantCredential();
$merchantCredential->setPartnerKey(PARTNER_KEY);
$customerInfo = new CustomerInfo();
$trackingParam->setMerchantCredential($merchantCredential);
$trackingParam->setCustomerInfo($customerInfo);
$trackingParam->setAutoOpen( FALSE );
$widget = $trackingClient->getWidget($trackingParam);

//SHOW MONITORING WIDGET
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<button type="button" class="btn btn-success monitoring_web_app">
    Proceed to Monitoring
</button>

<footer>
    <!-- START FedEx® Cross Border Monitoring -->
    <div id="widget-fcb-button-container" >
        <?php echo $widget; ?>
    </div>
    <!-- END FedEx® Cross Border Monitoring -->
</footer>
</body>
</html>