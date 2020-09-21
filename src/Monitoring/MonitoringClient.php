<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 9/11/18
 * Time: 10:49 AM
 */

namespace FedExCrossBorder\Monitoring;

use FedExCrossBorder\AbstractFedExCrossBorder;
use FedExCrossBorder\Adapter\AdapterInterface;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\ConfigTrait;
use FedExCrossBorder\Tracking\Entity\TrackingParam;

/**
 * Class MonitoringClient
 * @package FedExCrossBorder\Monitoring
 */
class MonitoringClient extends AbstractFedExCrossBorder
{
    use ConfigTrait;

    /**
     * MonitoringClient constructor.
     * @param Credentials|null $credentials
     * @param AdapterInterface|null $adapter
     * @param null $apiUrl
     * @param array $config
     */
    public function __construct(Credentials $credentials = null, AdapterInterface $adapter = null, $apiUrl = null, array $config = array())
    {

        if (!$apiUrl) {
            $apiUrl = $this->getMonitoringApiUrl();
        }

        parent::__construct($credentials, $adapter, $apiUrl, $config);
    }

    /**
     * Get monitoring widget
     *
     * @example tests/Tracking/TrackingClientTest.php 19 14 Getting a Monitoring widget
     *
     * @param TrackingParam $trackingParam
     * @return string
     */
    public function getWidget(TrackingParam $trackingParam)
    {
        $content = $this->adapter
            ->post(
                sprintf("%s/%s", $this->apiUrl, 'getMonitoring'),
                $trackingParam->toJSON(128)
            );

        return $content;
    }
}
