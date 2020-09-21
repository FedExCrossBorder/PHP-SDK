<?php

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Auth\OAuthClient;
use FedExCrossBorder\Geolocation\GeolocationClient;
use PHPUnit\Framework\TestCase;

/**
 * Class GeolocationClientTest
 */
class GeolocationClientTest extends TestCase
{
    protected $credentials;
    protected $guzzleAdapter;

    /**
     * @var GeolocationClient $geolocationClient
     */
    protected $geolocationClient;

    public function setUp()
    {
        parent::setUp();

        $this->credentials = $this->getCredentials();
        $this->guzzleAdapter = new GuzzleHttpAdapter();

        $this->geolocationClient = new GeolocationClient(
            $this->credentials,
            $this->guzzleAdapter,
            $_SERVER['FCB_CHECKOUT_URL']
        );

        $oauthClient = new OAuthClient($this->credentials);

        try {
            $access_token = $oauthClient->clientCredentials();
            $bearer_token = $access_token->getAccessToken();
        } catch (HttpException $e) {
            echo 'Unable to get Oauth Client Credentials, please check your API credentials.' . PHP_EOL;
            $bearer_token = '';
        }

        $this->geolocationClient->setAccessToken($bearer_token);
    }

    /**
     * @group geolocation
     */
    public function testGeolocation()
    {
        $ipAddress = '200.106.125.197';

        $countryCode = null;
        $geo = $this->geolocationClient->getCountry($ipAddress);

        if ($geo->getCountryCode() !== '') {
            $countryCode = $geo->getCountryCode();
        }

        $this->assertEquals('PE', $countryCode);
    }

    /**
     * @return Credentials
     */
    private function getCredentials()
    {
        return new Credentials($_SERVER['FCB_CLIENT_ID'], $_SERVER['FCB_CLIENT_SECRET'], $_SERVER['FCB_MERCHANT_KEY']);
    }
}
