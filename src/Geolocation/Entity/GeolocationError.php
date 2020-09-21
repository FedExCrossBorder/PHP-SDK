<?php

namespace FedExCrossBorder\Geolocation\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class GeolocationError
 *
 * @package FedExCrossBorder\Geolocation\Entity
 *
 * @property string $code
 * @property string $message
 * @property array $items
 */
class GeolocationError extends BaseModel
{
    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }
}
