<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 8/11/18
 * Time: 05:34 PM
 */

namespace FedExCrossBorder\Checkout\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ItemsError
 * @package FedExCrossBorder\Checkout\Entity
 *
 * @property string $id
 * @property string $name
 * @property integer $code
 * @property string $message
 */
class ItemsError extends BaseModel
{
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ItemsError
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ItemsError
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return ItemsError
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
     * @return ItemsError
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}
