<?php

namespace FedExCrossBorder\Tracking\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class CustomerInfo
 *
 * @package FedExCrossBorder\Tracking\Entity
 *
 * @property string $email
 */
class CustomerInfo extends BaseModel
{
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
