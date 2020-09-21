<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 30/10/18
 * Time: 03:06 PM
 */

namespace FedExCrossBorder\Merchant\Entity;

use FedExCrossBorder\Common\BaseModel;

/**
 * Class PackNotificationRequest
 * @package FedExCrossBorder\Merchant\Entity
 *
 * @property boolean $sync
 * @property boolean $validate_inventory
 * @property string $retailer_pack_identifier
 * @property string $carrier_token
 * @property string $retailer_order_number
 * @property string $fxcb_order_number
 * @property string $transit_method_code
 * @property boolean $boolean
 * @property integer $insure_amount
 * @property integer $qty_boxes
 * @property string $merchant_internal_reference_id
 * @property string $customer_transaction_id
 * @property PickupAddress $pickup_address
 * @property ConsignorAddress $consignor_address
 * @property BoxInfo[] $boxes_info
 * @property string $label_format
 * @property boolean $include_base64
 * @property boolean $insure
 * @property string $call_back_url
 * @property ImporterOfRecord $importerOfRecord
 */
class PackNotificationRequest extends BaseModel
{
    /**
     * @return ImporterOfRecord
     */
    public function getImporterOfRecord()
    {
        return $this->importerOfRecord;
    }

    /**
     * @param ImporterOfRecord $importerOfRecord
     * @return PackNotificationRequest
     */
    public function setImporterOfRecord($importerOfRecord)
    {
        $this->importerOfRecord = $importerOfRecord;
        return $this;
    }
    /**
     * @return string
     */
    public function getCallBackUrl()
    {
        return $this->call_back_url;
    }

    /**
     * @param string $call_back_url
     * @return PackNotificationRequest
     */
    public function setCallBackUrl($call_back_url)
    {
        $this->call_back_url = $call_back_url;
        return $this;
    }
    /**
     * @return bool
     */
    public function isInsure()
    {
        return $this->insure;
    }

    /**
     * @param bool $insure
     * @return PackNotificationRequest
     */
    public function setInsure($insure)
    {
        $this->insure = $insure;
        return $this;
    }
    /**
     * @return bool
     */
    public function isSync()
    {
        return $this->sync;
    }

    /**
     * @param bool $sync
     * @return PackNotificationRequest
     */
    public function setSync($sync)
    {
        $this->sync = $sync;
        return $this;
    }

    /**
     * @return bool
     */
    public function isValidateInventory()
    {
        return $this->validate_inventory;
    }

    /**
     * @param bool $validate_inventory
     * @return PackNotificationRequest
     */
    public function setValidateInventory($validate_inventory)
    {
        $this->validate_inventory = $validate_inventory;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetailerPackIdentifier()
    {
        return $this->retailer_pack_identifier;
    }

    /**
     * @param string $retailer_pack_identifier
     * @return PackNotificationRequest
     */
    public function setRetailerPackIdentifier($retailer_pack_identifier)
    {
        $this->retailer_pack_identifier = $retailer_pack_identifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarrierToken()
    {
        return $this->carrier_token;
    }

    /**
     * @param string $carrier_token
     * @return PackNotificationRequest
     */
    public function setCarrierToken($carrier_token)
    {
        $this->carrier_token = $carrier_token;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetailerOrderNumber()
    {
        return $this->retailer_order_number;
    }

    /**
     * @param string $retailer_order_number
     * @return PackNotificationRequest
     */
    public function setRetailerOrderNumber($retailer_order_number)
    {
        $this->retailer_order_number = $retailer_order_number;
        return $this;
    }

    /**
     * @return string
     */
    public function getFxcbOrderNumber()
    {
        return $this->fxcb_order_number;
    }

    /**
     * @param string $fxcb_order_number
     * @return PackNotificationRequest
     */
    public function setFxcbOrderNumber($fxcb_order_number)
    {
        $this->fxcb_order_number = $fxcb_order_number;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransitMethodCode()
    {
        return $this->transit_method_code;
    }

    /**
     * @param string $transit_method_code
     * @return PackNotificationRequest
     */
    public function setTransitMethodCode($transit_method_code)
    {
        $this->transit_method_code = $transit_method_code;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBoolean()
    {
        return $this->boolean;
    }

    /**
     * @param bool $boolean
     * @return PackNotificationRequest
     */
    public function setBoolean($boolean)
    {
        $this->boolean = $boolean;
        return $this;
    }

    /**
     * @return int
     */
    public function getInsureAmount()
    {
        return $this->insure_amount;
    }

    /**
     * @param int $insure_amount
     * @return PackNotificationRequest
     */
    public function setInsureAmount($insure_amount)
    {
        $this->insure_amount = $insure_amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getQtyBoxes()
    {
        return $this->qty_boxes;
    }

    /**
     * @param int $qty_boxes
     * @return PackNotificationRequest
     */
    public function setQtyBoxes($qty_boxes)
    {
        $this->qty_boxes = $qty_boxes;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantInternalReferenceId()
    {
        return $this->merchant_internal_reference_id;
    }

    /**
     * @param string $merchant_internal_reference_id
     * @return PackNotificationRequest
     */
    public function setMerchantInternalReferenceId($merchant_internal_reference_id)
    {
        $this->merchant_internal_reference_id = $merchant_internal_reference_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerTransactionId()
    {
        return $this->customer_transaction_id;
    }

    /**
     * @param string $customer_transaction_id
     * @return PackNotificationRequest
     */
    public function setCustomerTransactionId($customer_transaction_id)
    {
        $this->customer_transaction_id = $customer_transaction_id;
        return $this;
    }

    /**
     * @return PickupAddress
     */
    public function getPickupAddress()
    {
        return $this->pickup_address;
    }

    /**
     * @param PickupAddress $pickup_address
     * @return PackNotificationRequest
     */
    public function setPickupAddress($pickup_address)
    {
        $this->pickup_address = $pickup_address;
        return $this;
    }

    /**
     * @return ConsignorAddress
     */
    public function getConsignorAddress()
    {
        return $this->consignor_address;
    }

    /**
     * @param ConsignorAddress $consignor_address
     * @return PackNotificationRequest
     */
    public function setConsignorAddress($consignor_address)
    {
        $this->consignor_address = $consignor_address;
        return $this;
    }

    /**
     * @return BoxInfo[]
     */
    public function getBoxesInfo()
    {
        return $this->boxes_info;
    }

    /**
     * @param BoxInfo[] $boxes_info
     * @return PackNotificationRequest
     */
    public function setBoxesInfo($boxes_info)
    {
        $this->boxes_info = $boxes_info;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabelFormat()
    {
        return $this->label_format;
    }

    /**
     * @param string $label_format
     * @return PackNotificationRequest
     */
    public function setLabelFormat($label_format)
    {
        $this->label_format = $label_format;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIncludeBase64()
    {
        return $this->include_base64;
    }

    /**
     * @param bool $include_base64
     * @return PackNotificationRequest
     */
    public function setIncludeBase64($include_base64)
    {
        $this->include_base64 = $include_base64;
        return $this;
    }
}
