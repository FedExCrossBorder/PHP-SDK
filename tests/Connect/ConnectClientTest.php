<?php

use FedExCrossBorder\Connect\ConnectSoapClient;
use FedExCrossBorder\Connect\Entity\CartonsDat;
use FedExCrossBorder\Connect\Entity\ConnectDutyRequest;
use FedExCrossBorder\Connect\Entity\ConnectLandedCostRequest;
use FedExCrossBorder\Connect\Entity\ConnectOrderRemoveRequest;
use FedExCrossBorder\Connect\Entity\ConnectOrderRequest;
use FedExCrossBorder\Connect\Entity\ConnectOrderTrackingUpdateRequest;
use FedExCrossBorder\Connect\Entity\ConnectProductInfoRequest;
use FedExCrossBorder\Connect\Entity\ConnectSkuStatusRequest;
use FedExCrossBorder\Connect\Entity\OrderInformation;
use FedExCrossBorder\Connect\Entity\ProductInfo;
use FedExCrossBorder\Connect\Entity\ProductInfoDat;
use FedExCrossBorder\Connect\Entity\ProductsIdDat;
use FedExCrossBorder\Connect\Entity\TrackingList;
use PHPUnit\Framework\TestCase;

/**
 * Class ConnectClientTest
 */
class ConnectClientTest extends TestCase
{

    /**
     * @var ConnectSoapClient $connectClient
     */
    protected $connectClient;

    /**
     *
     */
    public function setUp()
    {
        parent::setUp();

        $this->connectClient = new ConnectSoapClient($_SERVER['FCB_WS_URL']);
    }

    /**
     * @group connect
     * @group connect-product-info
     */
    public function testConnectProductInfo()
    {
        $itemInformation = new CartonsDat();
        $itemInformation
            ->setL(10)
            ->setH(10)
            ->setW(10)
            ->setWt(0.5000)
            ;

        $item = new ProductInfoDat();
        $item
            ->setProductID('product_1')
            ->setDescription('Jeanneret Women\'s Austen White Leather Stainless Steel Austrian Crystal Accented Dial Watch')
            ->setUrl('http://dev.magento4.com/index.php/jeanneret-women-s-austen-white-leather-stainless-steel-austrian-crystal-accented-dial-watch.html')
            ->setImageUrl('http://dev.magento4.com/media/catalog/product/cache/0/image/265x/9df78eab33525d08d6e5fb8d27136e95/b/9/b9f87f04869ee3cc09de3ff4b36a7fdf.jpg')
            ->setPrice(300.0000)
            ->setCountryOfOrigin('US')
            ->setHsCode(0)
            ->setItemValuationCurrency('USD')
            ->setEccn('')
            ->setHazFlag(1)
            ->setLicenseFlag('')
            ->setImportFlag('')
            ->setUnitWeight('KG')
            ->setUnitDimension('CM')
            ->setItemInformation($itemInformation)
            ;

        $request = new ConnectProductInfoRequest();
        $request
            ->setMerchantKey($_SERVER['FCB_MERCHANT_KEY'])
            ->setLanguage('en')
            ->setItems([$item])
            ;

        /** @var mixed $response */
        $response = $this->connectClient->connectProductInfo($request);

        $this->assertObjectHasAttribute('ConnectProductInfoResult', $response);
        $this->assertAttributeEmpty(
            'error',
            $response->ConnectProductInfoResult,
            $response->ConnectProductInfoResult->errorMessage
        );
    }

    /**
     * @group connect
     * @group connect-sku-status
     */
    public function testConnectSkuStatus()
    {
        $item = new ProductsIdDat();
        $item->setProductID('product_1');

        $request = new ConnectSkuStatusRequest();
        $request
            ->setMerchantKey($_SERVER['FCB_MERCHANT_KEY'])
            ->setLanguage('en')
            ->setItems([$item])
            ;

        /** @var mixed $response */
        $response = $this->connectClient->connectSkuStatus($request);

        $this->assertObjectHasAttribute('ConnectSkuStatusResult', $response);
        $this->assertObjectHasAttribute('items', $response->ConnectSkuStatusResult);
        $this->assertAttributeEmpty(
            'error',
            $response->ConnectSkuStatusResult,
            $response->ConnectSkuStatusResult->errorMessage
        );
    }

    /**
     * @group connect
     */
    public function testConnectDuty()
    {
        $sku = [
            'productID' => '1',
            'countryOfOrigin' => 'US',
        ];

        $item = new ProductInfoDat($sku);
        $request = new ConnectDutyRequest();
        $request
            ->setMerchantKey($_SERVER['FCB_MERCHANT_KEY'])
            ->setLanguage('en')
            ->setItems([$item])
            ->setShipmentOriginCountry('US')
            ->setShipmentDestinationCountry('CA')
            ;

        /** @var mixed $response */
        $response = $this->connectClient->connectDuty($request);

        $this->assertObjectHasAttribute('ConnectDutyResult', $response);
        $this->assertObjectHasAttribute('items', $response->ConnectDutyResult);
        $this->assertAttributeEmpty('error', $response->ConnectDutyResult, $response->ConnectDutyResult->errorMessage);
    }

    /**
     * @group connect
     */
    public function testConnectLandedCost()
    {
        $item = new ProductInfo();
        $item
            ->setProductID('1')
            ->setQuantity(1)
            ->setPrice(199.000)
            ->setDutyId('522ff482cc64199ccc5ac19523d2ae14')
            ->setItemExportHubCountry('CA')
            ;

        $request = new ConnectLandedCostRequest();
        $request
            ->setMerchantKey($_SERVER['FCB_MERCHANT_KEY'])
            ->setSellerIdKey('')
            ->setLanguage('en')
            ->setPrivateIndividuals('')
            ->setItems([$item])
            ->setShipmentOriginCountry('US')
            ->setShipmentDestinationAddress1('Street 1')
            ->setShipmentDestinationAddress2('Int 1')
            ->setShipmentDestinationCity('Ontario')
            ->setShipmentDestinationStateOrProvince('Ontario')
            ->setShipmentDestinationZip('91761')
            ->setShipmentDestinationCountry('CA')
            ->setDomesticShippingCost('10')
            ->setInternationalShippingCost('1')
            ->setInternationalShippingName('International shipping')
            ->setLossAndDamageProtectionFlag(1)
            ->setCurrency('USD')
            ->setCurrencyConversionRate('')
            ->setService('')
            ;

        /** @var mixed $response */
        $response = $this->connectClient->connectLandedCost($request);

        $this->assertObjectHasAttribute('ConnectLandedCostResult', $response);
        $this->assertObjectHasAttribute('items', $response->ConnectLandedCostResult);
        $this->assertAttributeEmpty(
            'error',
            $response->ConnectLandedCostResult,
            $response->ConnectLandedCostResult->errorMessage
        );
    }

    /**
     * @group connect
     */
    public function testConnectOrder()
    {
        $orderInfo = new OrderInformation();
        $orderInfo
            ->setCarrier(2)
            ->setProductID('1')
            ->setQuantity(1)
            ->setPrice(199.000)
            ;

        $request = new ConnectOrderRequest();
        $request
            ->setMerchantKey($_SERVER['FCB_MERCHANT_KEY'])
            ->setSellerIdKey('')
            ->setLanguage('en')
            ->setOrderNumber('1')
            ->setLandedCostTransactionID('dfd122b87b8d130feef024b59ce683d7')
            ->setOrdersInfo([$orderInfo])
            ->setShipToBusiness('')
            ->setShipToFirstName('John')
            ->setShipToLastName('Johnson')
            ->setShipToAddress1('Ontario')
            ->setShipToAddress2('')
            ->setShipToAddress3('')
            ->setShipToCity('Ontario')
            ->setShipToState('Canada')
            ->setShipToZip('91761')
            ->setShipToCountry('CA')
            ->setShipToPhone('5566778899')
            ->setShipToEmail('test@yopmail.com')
            ->setShipToTaxID('')
            ->setRepackage(1)
            ->setDutyPaid(0)
            ->setLossAndDamageProtection(1)
            ->setEmailCustomerTracking(1)
            ->setSellingStoreName('Store Name')
            ->setSellingStoreURL('')
            ->setSellingStoreURLCS('')
            ->setSellingStoreURLImage('')
            ;

        /** @var mixed $response */
        $response = $this->connectClient->connectOrder($request);

        $this->assertObjectHasAttribute('ConnectOrderResult', $response);
        $this->assertAttributeEmpty(
            'error',
            $response->ConnectOrderResult,
            $response->ConnectOrderResult->errorMessage
        );
    }

    /**
     * @group connect
     */
    public function testConnectOrderRemove()
    {
        $request = new ConnectOrderRemoveRequest();
        $request
            ->setMerchantKey($_SERVER['FCB_MERCHANT_KEY'])
            ->setSellerIdKey('')
            ->setLanguage('en')
            ->setOrderNumber('1')
            ;

        /** @var mixed $response */
        $response = $this->connectClient->connectOrderRemove($request);

        $this->assertObjectHasAttribute('ConnectOrderRemoveResult', $response);
        $this->assertAttributeEmpty(
            'error',
            $response->ConnectOrderRemoveResult,
            $response->ConnectOrderRemoveResult->errorMessage
        );
    }

    /**
     * @group connect
     */
    public function testConnectOrderTrackingUpdate()
    {

        $trackList = new TrackingList();
        $trackList
            ->setProductID('1')
            ->setQuantity(1)
            ->setTrackingNumber('S8343-S83N97258L30D84A')
            ->setCarrier(2)
            ;

        $request = new ConnectOrderTrackingUpdateRequest();
        $request
            ->setMerchantKey($_SERVER['FCB_MERCHANT_KEY'])
            ->setSellerIdKey('')
            ->setLanguage('en')
            ->setOrderNumber('10000352233')
            ->setTrackList([$trackList])
            ;

        /** @var mixed $response */
        $response = $this->connectClient->connectOrderTrackingUpdate($request);

        $this->assertObjectHasAttribute('ConnectOrderTrackingUpdateResult', $response);
        $this->assertAttributeEmpty(
            'error',
            $response->ConnectOrderTrackingUpdateResult,
            $response->ConnectOrderTrackingUpdateResult->errorMessage
        );
    }
}
