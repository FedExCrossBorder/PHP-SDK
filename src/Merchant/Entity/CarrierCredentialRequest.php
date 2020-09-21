<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 30/10/18
 * Time: 12:26 PM
 */

namespace FedExCrossBorder\Merchant\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class CarrierCredentialRequest
 * @package FedExCrossBorder\Merchant
 *
 * @property integer $carrier
 * @property string $expire_date
 * @property CarrierCredentials $credentials
 */
class CarrierCredentialRequest extends BaseModel
{
    /**
     * @return int
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param int $carrier
     * @return CarrierCredentialRequest
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpireDate()
    {
        return $this->expire_date;
    }

    /**
     * @param string $expire_date
     * @return CarrierCredentialRequest
     */
    public function setExpireDate($expire_date)
    {
        $this->expire_date = $expire_date;

        return $this;
    }

    /**
     * @return CarrierCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param CarrierCredentials $credentials
     * @return CarrierCredentialRequest
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;

        return $this;
    }
}
