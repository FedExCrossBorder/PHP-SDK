<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 6/11/18
 * Time: 10:03 AM
 */

namespace FedExCrossBorder\Connect\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class CartonsDat
 * @package FedExCrossBorder\Connect\Entity
 *
 * @property float $l
 * @property float $w
 * @property float $h
 * @property float $wt
 */
class CartonsDat extends BaseModel
{
    /**
     * length
     * @return float
     */
    public function getL()
    {
        return $this->l;
    }

    /**
     * length
     * @param float $l
     * @return CartonsDat
     */
    public function setL($l)
    {
        $this->l = $l;
        return $this;
    }

    /**
     * width
     * @return float
     */
    public function getW()
    {
        return $this->w;
    }

    /**
     * width
     * @param float $w
     * @return CartonsDat
     */
    public function setW($w)
    {
        $this->w = $w;
        return $this;
    }

    /**
     * height
     * @return float
     */
    public function getH()
    {
        return $this->h;
    }

    /**
     * height
     * @param float $h
     * @return CartonsDat
     */
    public function setH($h)
    {
        $this->h = $h;
        return $this;
    }

    /**
     * @return float
     */
    public function getWt()
    {
        return $this->wt;
    }

    /**
     * weight
     * @param float $wt
     * @return CartonsDat
     */
    public function setWt($wt)
    {
        $this->wt = $wt;
        return $this;
    }

}
