<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 30/10/18
 * Time: 12:29 PM
 */

namespace FedExCrossBorder\Merchant\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class CarrierCredentials
 * @package FedExCrossBorder\Merchant
 *
 * @property string $account_name
 * @property string $account_number
 * @property string $account_key
 * @property string $account_meter
 * @property string $account_password
 * @property int $a
 */
class CarrierCredentials extends BaseModel
{
    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->account_name;
    }

    /**
     * @param string $account_name
     * @return CarrierCredentials
     */
    public function setAccountName($account_name)
    {
        $this->account_name = $account_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->account_number;
    }

    /**
     * @param string $account_number
     * @return CarrierCredentials
     */
    public function setAccountNumber($account_number)
    {
        $this->account_number = $account_number;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountKey()
    {
        return $this->account_key;
    }

    /**
     * @param string $account_key
     * @return CarrierCredentials
     */
    public function setAccountKey($account_key)
    {
        $this->account_key = $account_key;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountMeter()
    {
        return $this->account_meter;
    }

    /**
     * @param string $account_meter
     * @return CarrierCredentials
     */
    public function setAccountMeter($account_meter)
    {
        $this->account_meter = $account_meter;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountPassword()
    {
        return $this->account_password;
    }

    /**
     * @param string $account_password
     * @return CarrierCredentials
     */
    public function setAccountPassword($account_password)
    {
        $this->account_password = $account_password;

        return $this;
    }

}
