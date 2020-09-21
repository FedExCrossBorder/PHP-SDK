<?php

namespace FedExCrossBorder\Auth;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class AccessToken
 *
 * @package FedExCrossBorder\Common
 *
 * @property string $access_token
 * @property integer $expires_in
 * @property string $token_type
 * @property string $scope
 */

class AccessToken extends BaseModel
{
    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * @param string $access_token
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * @return integer
     */
    public function getExpiresIn()
    {
        return $this->expires_in;
    }

    /**
     * @param integer $expires_in
     */
    public function setExpiresIn($expires_in)
    {
        $this->expires_in = $expires_in;
    }

    /**
     * @return string
     */
    public function getTokenType()
    {
        return $this->token_type;
    }

    /**
     * @param string $token_type
     */
    public function setTokenType($token_type)
    {
        $this->token_type = $token_type;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
    }

}