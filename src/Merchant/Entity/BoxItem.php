<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 30/10/18
 * Time: 03:20 PM
 */

namespace FedExCrossBorder\Merchant\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class BoxItem
 * @package FedExCrossBorder\Merchant\Entity
 *
 * @property string $product_id
 * @property string $coo
 * @property integer $quantity
 */
class BoxItem extends BaseModel
{
    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return BoxItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param string $product_id
     * @return BoxItem
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoo()
    {
        return $this->coo;
    }

    /**
     * @param string $coo
     * @return BoxItem
     */
    public function setCoo($coo)
    {
        $this->coo = $coo;
        return $this;
    }
}
