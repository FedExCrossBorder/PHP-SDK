<?php

namespace FedExCrossBorder\Currency;

use FedExCrossBorder\Adapter\AdapterInterface;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Checkout\CheckoutClient;
use FedExCrossBorder\ConfigTrait;

/**
 * Class CurrencyClient
 * @package FedExCrossBorder\Currency
 */
class CurrencyClient extends CheckoutClient
{
    use ConfigTrait;

    /**
     * CurrencyClient constructor.
     * @param Credentials $credentials
     * @param AdapterInterface|null $adapter
     * @param null $apiUrl
     * @param array $config
     */
    public function __construct(
        Credentials $credentials,
        AdapterInterface $adapter = null,
        $apiUrl = null,
        $config = array()
    ) {
        if (empty($apiUrl)) {
            $apiUrl = $this->getCurrencyApiUrl();
        }

        parent::__construct($apiUrl, $adapter, $credentials, $config);
    }

    /**
     * @return string
     */
    public function getExchangeRate()
    {
        $content = $this->adapter
            ->get(
                sprintf("%s/v2/checkout/exchangeRates", $this->apiUrl)
            );

        return $content;
    }
}
