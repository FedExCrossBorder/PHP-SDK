<?php

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Tracking\Entity\CustomerInfo;
use FedExCrossBorder\Tracking\Entity\MerchantCredential;
use FedExCrossBorder\Tracking\Entity\TrackingParam;
use FedExCrossBorder\Tracking\TrackingClient;
use PHPUnit\Framework\TestCase;

/**
 * Class TrackingClientTest
 */
class TrackingClientTest extends TestCase
{
    /**
     * @group tracking
     * @group todo
     */
    public function testGetOrders()
    {
        $tracking = $this->getTrackingClient()->getOrders('sandra.sirasch@gmail.com');

        $this->assertNotEmpty($tracking);
        $this->assertJson($tracking);
    }

    /**
     * @group tracking
     * @group todo
     */
    public function testGetOrderActivities()
    {
        $tracking = $this->getTrackingClient()->getOrderActivities('348900');

        $this->assertNotEmpty($tracking);
        $this->assertJson($tracking);
    }

    /**
     * @group tracking
     * @group todo
     */
    public function testGetBoxItems()
    {
        $tracking = $this->getTrackingClient()->getBoxItems('420337169261297937924231545950');

        $this->assertNotEmpty($tracking);
        $this->assertJson($tracking);
    }

    public function testGetPackageItems()
    {
        $tracking = $this->getTrackingClient()->getPackageItems('420337169261297937924231545950');

        $this->assertNotEmpty($tracking);
        $this->assertJson($tracking);
    }

    /**
     * @return Credentials
     */
    private function getCredentials()
    {
        return new Credentials($_SERVER['FCB_CLIENT_ID'], $_SERVER['FCB_CLIENT_SECRET'], $_SERVER['FCB_MERCHANT_KEY']);
    }

    /**
     * @return TrackingClient
     */
    private function getTrackingClient()
    {
        $guzzleAdapter = new GuzzleHttpAdapter();

         return new TrackingClient($this->getCredentials(), $guzzleAdapter, $_SERVER['FCB_TRACKING_URL']);
    }
}
