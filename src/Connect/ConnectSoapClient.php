<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 1/11/18
 * Time: 10:41 AM
 */

namespace FedExCrossBorder\Connect;

use FedExCrossBorder\ConfigTrait;

/**
 * Class ConnectSoapClient
 * @package FedExCrossBorder\Connect
 */
class ConnectSoapClient extends WSBase
{
    use ConfigTrait;

    /**
     * ConnectSoapClient constructor.
     * @param $wsUrl
     */
    public function __construct($wsUrl = null)
    {
        if (!$wsUrl) {
            $wsUrl = $this->getConnectApiUrl();
        }

        $this->setUrlWS($wsUrl);
        $this->createClient();
    }

    /**
     * @param $request
     * @return array
     */
    public function connectDuty($request)
    {
        $method = 'ConnectDuty';
        $this->request($method, $request);

        return $this->getResponse();
    }

    /**
     * @param $request
     * @return array
     */
    public function connectLandedCost($request)
    {
        $method = 'ConnectLandedCost';
        $this->request($method, $request);

        return $this->getResponse();
    }

    /**
     * @param $request
     * @return array
     */
    public function connectOrder($request)
    {
        $method = 'ConnectOrder';
        $this->request($method, $request);

        return $this->getResponse();
    }

    /**
     * @param $request
     * @return array
     */
    public function connectOrderRemove($request)
    {
        $method = 'ConnectOrderRemove';
        $this->request($method, $request);

        return $this->getResponse();
    }

    /**
     * @param $request
     * @return array
     */
    public function connectOrderTrackingUpdate($request)
    {
        $method = 'ConnectOrderTrackingUpdate';
        $this->request($method, $request);

        return $this->getResponse();
    }

    /**
     * @param $request
     * @return array
     */
    public function connectProductInfo($request)
    {
        $method = 'ConnectProductInfo';
        $this->request($method, $request);

        return $this->getResponse();
    }

    /**
     * @param $request
     *
     * @return array
     */
    public function connectSkuStatus($request)
    {
        $method = 'ConnectSkuStatus';
        $this->request($method, $request);

        return $this->getResponse();
    }
}
