<?php

namespace FedExCrossBorder\Geolocation;

use FedExCrossBorder\AbstractFedExCrossBorder;
use FedExCrossBorder\Adapter\AdapterInterface;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\ConfigTrait;
use FedExCrossBorder\Geolocation\Entity\Geolocation;

class GeolocationClient extends AbstractFedExCrossBorder
{
    use ConfigTrait;

    /**
     * GeolocationClient constructor.
     * @param Credentials $credentials
     * @param AdapterInterface|null $adapter
     * @param null $apiUrl
     * @param array $config
     */
    public function __construct(Credentials $credentials, AdapterInterface $adapter = null, $apiUrl = null, $config = array())
    {
        if (empty($apiUrl)) {
            $apiUrl = $this->getGeolocationApiUrl();
        }

        parent::__construct($credentials, $adapter, $apiUrl, $config);
    }

    public function getCountry($ipAddress)
    {
        $ipAddress = urlencode($ipAddress);
        $content = $this->adapter
            ->get(
                sprintf("%s/v2/checkout/geolocation/%s", $this->apiUrl, $ipAddress)
            );


        return new Geolocation($content);
    }
}
