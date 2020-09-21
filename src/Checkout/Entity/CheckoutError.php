<?php

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class CheckoutError
 *
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property string $code
 * @property string $message
 * @property ItemsError[] $items
 */
class CheckoutError extends BaseModel
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
     * @return \FedExCrossBorder\Checkout\Entity\ItemsError[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param \FedExCrossBorder\Checkout\Entity\ItemsError[] $items
     * @return CheckoutError
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

}
