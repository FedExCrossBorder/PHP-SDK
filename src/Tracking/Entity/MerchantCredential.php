<?php

namespace FedExCrossBorder\Tracking\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class MerchantCredential
 *
 * @package FedExCrossBorder\Tracking\Entity
 *
 * @property string $partner_key
 */
class MerchantCredential extends BaseModel
{
    /**
     * @return string
     */
    public function getPartnerKey()
    {
        return $this->partner_key;
    }

    /**
     * @param string $partner_key
     * @return $this
     */
    public function setPartnerKey($partner_key)
    {
        $this->partner_key = $partner_key;

        return $this;
    }
}
