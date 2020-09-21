<?php
/**
 * Created by PhpStorm.
 * User: rene
 * Date: 1/11/18
 * Time: 10:46 AM
 */

namespace FedExCrossBorder\Connect;

use DOMDocument;

/**
 * Class WSBase
 * @package FedExCrossBorder\Connect
 */
abstract class WSBase
{
    /** @var  \SoapClient */
    protected $client;

    /** @var array Soap options */
    protected $options = array(
        'soap_version'  => SOAP_1_2,
        'trace'         => true,
        'exceptions'    => true,
        'cache_wsdl'    => WSDL_CACHE_NONE,
    );

    /** @var string Url WS */
    protected $urlWS;

    /** @var bool Evalute if WS response has an error */
    protected $hasError = false;

    /** @var  int Response error code if WS has an error */
    protected $errorCode;

    /** @var  string Response error message if WS has an error */
    protected $errorMsg;

    /** @var array WS Response parsed */
    protected $responseWS;

    /** @var  string Soap error message */
    protected $requestError;

    /**
     * Set ws url
     *
     * @param string $urlWS
     *
     * @return $this
     */
    public function setUrlWS($urlWS)
    {
        $this->urlWS = $urlWS;

        return $this;
    }

    /**
     * Get dom document soap response
     *
     * @return DOMDocument
     */
    protected function getResponseDomDocument()
    {
        $document = new DOMDocument('1.0', 'utf-8');
        $document->loadXML($this->client->__getLastResponse());

        return $document;
    }

    /**
     * Add Soap options
     *
     * @param mixed $key
     * @param mixed $value
     *
     * @return $this
     */
    public function addSoapOption($key, $value)
    {
        $this->options[$key] = $value;

        return $this;
    }

    /**
     * Create WS Client
     *
     * @param null $urlWS
     *
     * @return bool
     */
    protected function createClient($urlWS = null)
    {
        if (empty($urlWS)) {
            if (empty($this->urlWS)) {
                return false;
            }
            $urlWS = $this->urlWS;
        }

        try {
            $this->client = @new \SoapClient($urlWS, $this->options);
        } catch (\SoapFault $sf) {
            $this->setError('Error de conexión con el servidor.', $sf->getMessage(), $sf->getCode());

            return false;
        } catch (\Exception $e) {
            $this->setError('Error de conexión con el servidor.', $e->getMessage(), $e->getCode());

            return false;
        }

        return true;
    }

    /**
     * WS Request
     *
     * @param string      $method
     * @param array       $params
     * @param string|null $urlWS
     *
     * @return bool
     */
    protected function request($method, $params, $urlWS = null)
    {
        $this->clearResponse();

        if ($this->createClient($urlWS)) {
            try {
                $this->responseWS = $this->client->__soapCall($method, array($params));

                return true;
            } catch (\Exception $e) {
                $this->setError('Error al consultar el servicio.', $e->getMessage(), $e->getCode());
            }
        }

        return false;
    }

    /**
     * Set error message
     *
     * @param string      $title      Message for user
     * @param null|string $message    Error message
     * @param null|string $code       Error code
     */
    protected function setError($title, $message = null, $code = null)
    {
        $this->hasError = true;
        $this->errorCode = $code;
        $this->errorMsg = $message !== null ? $message: $title;
        $this->requestError = $message !== null ? $message : $title;
    }

    /**
     * Check if parse response has errors
     *
     * @return bool
     */
    public function hasError()
    {
        return $this->hasError;
    }

    /**
     * WS error code
     *
     * @return null|string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * WS error message
     *
     * @return null|string
     */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }

    /**
     * WS response in array
     *
     * @param bool $removeXMLResponse
     *
     * @return array
     */
    public function getResponseArray($removeXMLResponse = true)
    {
        $data = array(
            'success'       => !$this->hasError,
            'errorCode'     =>  $this->errorCode,
            'errorMsg'      =>  $this->errorMsg,
            'responseWS'    =>  $this->hasError ? '' : $this->responseWS,
        );

        if (!$removeXMLResponse && $this->client instanceof \SoapClient) {
            $data['responseXML'] = $this->client->__getLastResponse();
        }

        return $data;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        $response = $this->responseWS;

        if (!$this->responseWS) {
            $response = $this->getResponseArray();
        }

        return $response;
    }

    /**
     * Clear response data
     */
    protected function clearResponse()
    {
        $this->hasError = false;
        $this->errorCode = '';
        $this->errorMsg = '';
        $this->responseWS = '';
    }

    /**
     * @return string
     */
    public function getRequestError()
    {
        return $this->requestError;
    }
}
