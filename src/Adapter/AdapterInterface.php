<?php
namespace FedExCrossBorder\Adapter;

use FedExCrossBorder\Exception\HttpException;

interface AdapterInterface
{
    /**
     * Http Client Get Method
     *
     * @param string $url
     *
     * @throws HttpException
     *
     * @return string
     */
    public function get($url);

    /**
     * Http Client Delete Method
     *
     * @param string $url
     *
     * @throws HttpException
     */
    public function delete($url);

    /**
     * Http Client Put Method
     *
     * @param string       $url
     * @param array|string $content
     *
     * @throws HttpException
     *
     * @return string
     */
    public function put($url, $content = '');

    /**
     * Http Client Post Method
     *
     * @param string       $url
     * @param array|string $content
     *
     * @throws HttpException
     *
     * @return string
     */
    public function post($url, $content = '');

    /**
     * Http Client Post Method with Form Params
     *
     * @param string $url
     * @param array $params
     * @param array $headers
     *
     * @throws HttpException
     *
     * @return string
     */
    public function postBodyParams($url, $params = [], $headers = null);

    /**
     * @todo
     *
     * @return array|null
     */
    public function getLatestResponseHeaders();
    /**
     * Set headers
     *
     * @param array $headers
     * @return
     */
    public function setHeaders(array $headers);

    /**
     * Add a new key, value header
     *
     * @param string $key
     * @param string $value
     * @return
     */
    public function addHeader($key, $value);

    /**
     * Patch pbject
     *
     * @param $url
     * @param $content
     * @return
     */
    public function patch($url, $content);
}
