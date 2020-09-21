<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class AvailableLanguages
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property \FedExCrossBorder\Checkout\Entity\Language[] $available_languages
 */
class AvailableLanguages extends BaseModel
{
    /**
     * @return \FedExCrossBorder\Checkout\Entity\Language[]
     */
    public function getAvailableLanguages()
    {
        return $this->available_languages;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\Language[] $available_languages
     * @return $this
     */
    public function setAvailableLanguages($available_languages)
    {
        $this->available_languages = $available_languages;

        return $this;
    }
}
