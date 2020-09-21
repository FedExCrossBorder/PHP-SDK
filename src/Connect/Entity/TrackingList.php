<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 6/11/18
 * Time: 11:46 AM
 */

namespace FedExCrossBorder\Connect\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class TrackingList
 * @package FedExCrossBorder\Connect\Entity
 *
 * @property string $productID
 * @property string $trackingNumber
 * @property integer $quantity
 * @property integer $carrier
 */
class TrackingList extends BaseModel
{
    /**
     * @return string
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @param string $productID
     * @return TrackingList
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     * @return TrackingList
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return TrackingList
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param int $carrier
     * @return TrackingList
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }
}
