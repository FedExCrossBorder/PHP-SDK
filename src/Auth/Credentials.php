<?php

namespace FedExCrossBorder\Auth;

class Credentials
{
    /**
     * The API Client ID.
     *
     * @var string
     */
    private $clientId;

    /**
     * The API Client Secret.
     *
     * @var string
     */
    private $clientSecret;

    /**
     * The Merchant Key
     *
     * @var string
     */
    private $merchantKey;

    /**
     * Constructor.
     *
     * @param string $clientId The API Client ID.
     * @param string $clientSecret The API Client key.
     * @param string $merchantKey The Merchant key
     */
    public function __construct($clientId, $clientSecret, $merchantKey = null)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->merchantKey = $merchantKey;
    }
    /**
     * Returns the Client ID.
     *
     * @return string The client ID.
     */
    public function getClientId()
    {
        return $this->clientId;
    }
    /**
     * Returns the API Client Secret.
     *
     * @return string The API Client Secret.
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * @return string
     */
    public function getMerchantKey()
    {
        return $this->merchantKey;
    }

    /**
     * @param string $merchantKey
     * @return Credentials
     */
    public function setMerchantKey($merchantKey)
    {
        $this->merchantKey = $merchantKey;

        return $this;
    }

}
