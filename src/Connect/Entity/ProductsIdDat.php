<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 6/11/18
 * Time: 11:52 AM
 */

namespace FedExCrossBorder\Connect\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class ProductsIdDat
 * @package FedExCrossBorder\Connect\Entity
 *
 * @property $productID
 */
class ProductsIdDat extends BaseModel
{
    /**
     * @return mixed
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @param mixed $productID
     * @return ProductsIdDat
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }

}
