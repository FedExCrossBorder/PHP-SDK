<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 9/11/18
 * Time: 10:56 AM
 */

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Monitoring\MonitoringClient;
use FedExCrossBorder\Tracking\Entity\CustomerInfo;
use FedExCrossBorder\Tracking\Entity\MerchantCredential;
use FedExCrossBorder\Tracking\Entity\TrackingParam;
use PHPUnit\Framework\TestCase;

/**
 * Class MonitoringClientTest
 */
class MonitoringClientTest extends TestCase
{
    /**
     * @group monitoring
     */
    public function testGetWidget()
    {
        $credentials = $this->getCredentials();
        $guzzleAdapter = new GuzzleHttpAdapter();

        $monitoringClient = new MonitoringClient($credentials, $guzzleAdapter, $_SERVER['FCB_WEBAPP_URL']);

        $trackingParam = new TrackingParam();
        $merchantCredential = new MerchantCredential();
        $merchantCredential->setPartnerKey($_SERVER['FCB_PARTNER_KEY']);
        $customerInfo = new CustomerInfo();
        $customerInfo->setEmail('david.l.vergara@gmail.com');
        $trackingParam->setMerchantCredential($merchantCredential);
        $trackingParam->setCustomerInfo($customerInfo);
        $widget = $monitoringClient->getWidget($trackingParam);

        $this->assertNotEmpty($widget);
        $this->assertContains('link', $widget);
        $this->assertContains('div', $widget);
        $this->assertContains('script', $widget);
    }

    /**
     * @return Credentials
     */
    private function getCredentials()
    {
        return new Credentials($_SERVER['FCB_CLIENT_ID'], $_SERVER['FCB_CLIENT_SECRET'], $_SERVER['FCB_MERCHANT_KEY']);
    }
}
