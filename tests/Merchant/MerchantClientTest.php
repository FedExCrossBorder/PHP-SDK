<?php

use FedExCrossBorder\Adapter\GuzzleHttpAdapter;
use FedExCrossBorder\Auth\Credentials;
use FedExCrossBorder\Checkout\Entity\Cart;
use FedExCrossBorder\Checkout\Entity\Checkout;
use FedExCrossBorder\Merchant\Entity\BoxInfo;
use FedExCrossBorder\Merchant\Entity\BoxItem;
use FedExCrossBorder\Merchant\Entity\CarrierCredentialRequest;
use FedExCrossBorder\Merchant\Entity\CarrierCredentials;
use FedExCrossBorder\Merchant\Entity\ConsignorAddress;
use FedExCrossBorder\Merchant\Entity\CustomRefundRequest;
use FedExCrossBorder\Merchant\Entity\ItemRefundRequest;
use FedExCrossBorder\Merchant\Entity\PackNotificationRequest;
use FedExCrossBorder\Merchant\Entity\PickupAddress;
use FedExCrossBorder\Merchant\MerchantClient;
use PHPUnit\Framework\TestCase;

/**
 * Class MerchantClientTest
 */
class MerchantClientTest extends TestCase
{
    /**
     * @dataProvider fullCartProvider
     * @param $cartData
     */
    public function testCreateCheckout($cartData)
    {
        $cart = new Cart($cartData);

        /** @var Checkout $checkout */
        $checkout = $this->getMerchantClient()->createCheckout($cart);
        $this->assertNotEmpty($checkout->getCheckoutId());
    }

    /**
     * @dataProvider refundItemData
     * @param $refundItemRequestData
     */
    public function testRefundItem($refundItemRequestData)
    {
        $refundItemRequest = new ItemRefundRequest($refundItemRequestData);

        $result = $this->getMerchantClient()->refundItem($refundItemRequest);
        $this->assertNotEmpty($result);
        $this->assertJson($result);
    }

    /**
     * @group pack
     */
    public function testSaveCredentials()
    {

        $credentials = new CarrierCredentials();
        $credentials
            ->setAccountNumber('491235624')
            ->setAccountMeter('103751097')
            ->setAccountPassword('PA6yJeocv8SyoAdY9Gzi4hKej')
            ->setAccountName('FEDEX-MYACCOUNT')
            ->setAccountKey('PddsEWAOPB10Znqp')
        ;

        $carrierCredential = new CarrierCredentialRequest();
        $carrierCredential
            ->setCarrier(2)
            ->setExpireDate('2018-12-18 00:00:00')
            ->setCredentials($credentials)
        ;

        /** @var string $carriersToken */
        $carriersToken = $this->getMerchantClient()->saveCredentials($carrierCredential);
        $this->assertNotEmpty($carriersToken);
        $this->assertJson($carriersToken);
        $this->assertRegExp('/token/', $carriersToken);
    }

    /**
     * @group pack
     */
    public function testGetPackNotification()
    {
        $idPackNotification = '139';

        $rs = $this->getMerchantClient()->getPackNotification($idPackNotification);
        $this->assertNotEmpty($rs);
        $this->assertJson($rs);
    }

    /**
     * @group pack
     */
    public function testGetDocuments()
    {
        $idPackNotification = '139';
        $documents = $this->getMerchantClient()->getDocuments($idPackNotification);

        $this->assertNotEmpty($documents);
        $this->assertJson($documents);
    }

    /**
     * @group pack
     */
    public function testGetDocumentsById()
    {
        $idPackNotification = '139';
        $idDoc = '29';
        $documents = $this->getMerchantClient()->getDocumentsById($idPackNotification, $idDoc);

        $this->assertNotEmpty($documents);
    }

    /**
     * @group pack
     */
    public function testCancelPackNotification()
    {
        $idPackNotification = '170';
        $rs = $this->getMerchantClient()->cancelPackNotification($idPackNotification);

        $this->assertNotEmpty($rs);
        $this->assertJson($rs);
        $this->assertRegExp('/success/', $rs);
        $this->assertRegExp('/id_pack_notification_log/', $rs);
    }

    /**
     * @group pack
     */
    public function testCreatePackNotification()
    {
        $packNotificationRequest = $this->getPackNotificationRequest();
        $packNotification = $this->getMerchantClient()->createPackNotification($packNotificationRequest);
        $this->assertNotEmpty($packNotification);
        $this->assertJson($packNotification);
        $this->assertRegExp('/id_pack_notification/', $packNotification);
    }

    /**
     * @group pack
     */
    public function testCustomRefund()
    {
        $customRefundRequest = new CustomRefundRequest();
        $customRefundRequest
            ->setOrderNumber('1000373636')
            ->setCustomRefundAmount(131.66)
            ->setRefundReasonCode(4)
            ->setUser('Postman')
            ->setMerchantNote('Custom test refund note')
        ;

        $customRefund = $this->getMerchantClient()->customRefund($customRefundRequest);
        $this->assertNotEmpty($customRefund);
        $this->assertJson($customRefund);
    }

    /**
     * @return PackNotificationRequest
     */
    private function getPackNotificationRequest()
    {

        $pickupAddress = new PickupAddress();
        $pickupAddress
            ->setCompanyName('test')
            ->setAddress1('test')
            ->setAddress2('test 2')
            ->setCity('Mex')
            ->setState('Mex')
            ->setZipCode('54605')
            ->setCountry('MX')
            ->setPhone('534534534')
            ->setTaxId('as123123')
        ;

        $consignorAddress = new ConsignorAddress();
        $consignorAddress
            ->setCompanyName('test')
            ->setAddress1('test')
            ->setAddress2('test 2')
            ->setCity('Mex')
            ->setState('Mex')
            ->setZipCode('54605')
            ->setCountry('MX')
            ->setPhone('534534534')
            ->setTaxId('as123123')
        ;

        $item = new BoxItem();
        $item
            ->setProductId('1')
            ->setCoo('CO')
        ;

        $boxInfo = new BoxInfo();
        $boxInfo
            ->setBoxDimUom('CM')
            ->setBoxWeight('5')
            ->setBoxWeightUom('KG')
            ->setBoxLength('15')
            ->setBoxWidth('15')
            ->setBoxHeight('10')
            ->setItems([$item])
        ;

        $packNotificationRequest = new PackNotificationRequest();
        $packNotificationRequest
            ->setInsure(true)
            ->setCarrierToken('581062683dbd9b45483f6090a2da39a2')
            ->setRetailerOrderNumber('1000376704')
            ->setFxcbOrderNumber('1000376704')
            ->setTransitMethodCode('FDX-IE')
            ->setInsureAmount(1.0)
            ->setQtyBoxes(3)
            ->setLabelFormat('PNG')
            ->setPickupAddress($pickupAddress)
            ->setConsignorAddress($consignorAddress)
            ->setBoxesInfo([$boxInfo])
        ;

        return $packNotificationRequest;
    }

    /**
     * @return Credentials
     */
    private function getCredentials()
    {
        return new Credentials($_SERVER['FCB_CLIENT_ID'], $_SERVER['FCB_CLIENT_SECRET'], $_SERVER['FCB_MERCHANT_KEY']);
    }

    /**
     * @return MerchantClient
     */
    private function getMerchantClient()
    {
        $guzzleAdapter = new GuzzleHttpAdapter();

        return new MerchantClient($this->getCredentials(), $guzzleAdapter, $_SERVER['FCB_MERCHANT_URL']);
    }

    /**
     * @return array
     */
    public function refundItemData()
    {
        return [[[
            'order_number' => '1000351713',
            'charged_transit_cost' => '30.00',
            'dutiable_transit_cost' => '45.00',
            'user' => 'user',
            'merchant_note' => 'refund note',
            'box_item' => [
                'product_id' => '1',
                'quantity' => 1
            ],]]
        ];
    }

    /**
     * @return array
     */
    public function fullCartProvider()
    {
        return [
            [
                [
                    'shipping_address' => [
                        'first_name' => 'Juan Carlos',
                        'last_name' => 'Ludeña',
                        'company' => 'otra',
                        'address_1' => 'loas alphes',
                        'address_2' => 'los aplhes 2',
                        'city' => 'New York',
                        'country' => 'PE',
                        'state' => 'Alaska',
                        'zip' => '99812',
                        'phone' => '2345678',
                        'email' => 'jludena@idigital.pe',
                        'custom_1' => '',
                        'custom_2' => '',
                        'custom_3' => '',
                        'tax_id' => ''
                    ],
                    'billing_address' => [
                        'first_name' => 'Juan Carlos',
                        'last_name' => 'Ludeña',
                        'company' => 'otra',
                        'address_1' => 'loas alphes',
                        'address_2' => 'los aplhes 2',
                        'city' => 'New York',
                        'country' => 'EC',
                        'state' => 'Alaska',
                        'zip' => '99812',
                        'phone' => '2345678',
                        'email' => 'jludena@idigital.pe',
                        'custom_1' => '',
                        'custom_2' => '',
                        'custom_3' => '',
                        'tax_id' => ''
                    ],
                    'domestic_shipping_charge' => '1000.00',
                    'shipping_method' => [
                        "code" => 1
                    ],
                    'merchant_currency' => 'USD',
                    'charge_insurance' => true,
                    'products' => [
                        [
                            'id' => '1',
                            'name' => 'test',
                            'price' => 199,
                            'quantity' => 1,
                            'shipping' => 10.00,
                        ]
                    ],
                    'customer_attributes' => [
                        'locale' => 'en_US',
                        'timezone' => 'America/New_York',
                        'ip' => '190.233.97.170'
                    ]
                ]
            ]
        ];
    }
}
