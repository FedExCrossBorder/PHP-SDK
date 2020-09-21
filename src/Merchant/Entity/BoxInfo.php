<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 30/10/18
 * Time: 03:18 PM
 */

namespace FedExCrossBorder\Merchant\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class BoxInfo
 * @package FedExCrossBorder\Merchant\Entity
 *
 * @property string $box_dim_uom
 * @property string $box_weight_uom
 * @property string $box_weight
 * @property string $box_length
 * @property string $box_width
 * @property string $box_height
 * @property BoxItem[] $items
 */
class BoxInfo extends BaseModel
{
    /**
     * @return string
     */
    public function getBoxDimUom()
    {
        return $this->box_dim_uom;
    }

    /**
     * @param string $box_dim_uom
     * @return BoxInfo
     */
    public function setBoxDimUom($box_dim_uom)
    {
        $this->box_dim_uom = $box_dim_uom;
        return $this;
    }

    /**
     * @return string
     */
    public function getBoxWeightUom()
    {
        return $this->box_weight_uom;
    }

    /**
     * @param string $box_weight_uom
     * @return BoxInfo
     */
    public function setBoxWeightUom($box_weight_uom)
    {
        $this->box_weight_uom = $box_weight_uom;
        return $this;
    }

    /**
     * @return string
     */
    public function getBoxWeight()
    {
        return $this->box_weight;
    }

    /**
     * @param string $box_weight
     * @return BoxInfo
     */
    public function setBoxWeight($box_weight)
    {
        $this->box_weight = $box_weight;
        return $this;
    }

    /**
     * @return string
     */
    public function getBoxLength()
    {
        return $this->box_length;
    }

    /**
     * @param string $box_length
     * @return BoxInfo
     */
    public function setBoxLength($box_length)
    {
        $this->box_length = $box_length;
        return $this;
    }

    /**
     * @return string
     */
    public function getBoxWidth()
    {
        return $this->box_width;
    }

    /**
     * @param string $box_width
     * @return BoxInfo
     */
    public function setBoxWidth($box_width)
    {
        $this->box_width = $box_width;
        return $this;
    }

    /**
     * @return string
     */
    public function getBoxHeight()
    {
        return $this->box_height;
    }

    /**
     * @param string $box_height
     * @return BoxInfo
     */
    public function setBoxHeight($box_height)
    {
        $this->box_height = $box_height;
        return $this;
    }

    /**
     * @return BoxItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param BoxItem[] $items
     * @return BoxInfo
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }
}