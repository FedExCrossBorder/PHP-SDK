<?php

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Currency\CurrencyClient;
use PHPUnit\Framework\TestCase;

class CurrencyClientTest extends TestCase
{
    /**
     * @group currency
     */
    public function testGetExchangeRate()
    {
        $credentials = $this->getCredentials();
        $guzzleAdapter = new GuzzleHttpAdapter();

        $currencyClient = new CurrencyClient($credentials, $guzzleAdapter, $_SERVER['FCB_CHECKOUT_URL']);

        $response = $currencyClient->getExchangeRate();

        $arrResponse = json_decode($response, true);

        $this->assertTrue(is_array($arrResponse));
        $this->assertTrue(count($arrResponse)>0);
        $this->assertArrayHasKey('AED', $arrResponse);
        $this->assertArrayHasKey('USD', $arrResponse);
        $this->assertArrayHasKey('PEN', $arrResponse);
        $this->assertArrayHasKey('BTC', $arrResponse);
    }

    /**
     * @return Credentials
     */
    public function getCredentials()
    {
        return new Credentials($_SERVER['FCB_CLIENT_ID'], $_SERVER['FCB_CLIENT_SECRET'], $_SERVER['FCB_MERCHANT_KEY']);
    }
}
