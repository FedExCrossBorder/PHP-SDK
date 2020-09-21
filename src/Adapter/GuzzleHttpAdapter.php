<?php
namespace FedExCrossBorder\Adapter;

use FedExCrossBorder\Exception\HttpException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;

class GuzzleHttpAdapter implements AdapterInterface
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var array $headers
     */
    protected $headers;

    /**
     * @var Response|ResponseInterface
     */
    protected $response;

    /**
     * @param ClientInterface|null $client
     */
    public function __construct(ClientInterface $client = null)
    {
        $this->client = $client ?: new Client();
    }

    /**
     * {@inheritdoc}
     */
    public function get($url)
    {
        try {
            $this->response = $this->client
                ->get(
                    $url,
                    [
                        'headers' => $this->headers
                    ]
                )
            ;
        } catch (RequestException $e) {
            $this->response = $e->getResponse();
            $this->handleError($e);
        }
        return $this->response->getBody()->getContents();
    }

    /**
     * {@inheritdoc}
     */
    public function delete($url)
    {
        try {
            $this->response = $this->client
                ->delete(
                    $url,
                    [
                        'headers' => $this->headers
                    ]
                )
            ;
        } catch (RequestException $e) {
            $this->response = $e->getResponse();
            $this->handleError($e);
        }
        return $this->response->getBody();
    }

    /**
     * {@inheritdoc}
     */
    public function put($url, $content = '')
    {
        try {
            $this->response = $this->client
                ->put(
                    $url,
                    [
                        'headers' => $this->headers,
                        'body' => $content
                    ]
                )
            ;
        } catch (RequestException $e) {
            $this->response = $e->getResponse();
            $this->handleError($e);
        }
        return $this->response->getBody()->getContents();
    }

    /**
     * {@inheritdoc}
     */
    public function post($url, $body = '')
    {
        try {
            $this->response = $this->client
                ->post(
                    $url,
                    [
                        'headers' => $this->headers,
                        'body' => $body
                    ]
                )
            ;
        } catch (RequestException $e) {
            $this->response = $e->getResponse();
            $this->handleError($e);
        }
        return $this->response->getBody()->getContents();
    }

    /**
     * {@inheritdoc}
     */
    public function patch($url, $body = '')
    {
        try {
            $this->response = $this->client
                ->patch(
                    $url,
                    [
                        'headers' => $this->headers,
                        'body' => $body
                    ]
                )
            ;
        } catch (RequestException $e) {
            $this->response = $e->getResponse();
            $this->handleError($e);
        }

        return $this->response->getBody()->getContents();
    }

    /**
     * {@inheritdoc}
     */
    public function postBodyParams($url, $params = [], $headers = null)
    {
        try {
            if($headers == null) {
                $headers = $this->headers;
            }

            $guzzleVersion = ClientInterface::VERSION;

            $options = [
                'headers' => $headers,
            ];

            if ('5' == $guzzleVersion[0])
            {
                $options['body'] = $params;
            } elseif ('6' == $guzzleVersion[0]) {
                $options['form_params'] = $params;
            }

            $this->response = $this->client
                ->post(
                    $url,
                    $options
                )
            ;
        } catch (RequestException $e) {
            $this->response = $e->getResponse();
            $this->handleError($e);
        }
        return $this->response->getBody()->getContents();
    }

    /**
     * {@inheritdoc}
     */
    public function getLatestResponseHeaders()
    {
        if (null === $this->response) {
            return;
        }
        return [
            'reset' => (int) (string) $this->response->getHeader('RateLimit-Reset'),
            'remaining' => (int) (string) $this->response->getHeader('RateLimit-Remaining'),
            'limit' => (int) (string) $this->response->getHeader('RateLimit-Limit'),
        ];
    }

    /**
     * @param RequestException $e
     * @throws HttpException
     */
    protected function handleError(RequestException $e)
    {
        $body = (string) $this->response->getBody();
        $code = (int) $this->response->getStatusCode();
        $content = json_decode($body);
        $message = isset($content->detail) ? $content->detail : $e->getMessage();
        throw new HttpException(!empty($message) ? $message: 'Request not processed.', $code, $content);
    }

    /**
     * @inheritdoc
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }

    /**
     * @inheritdoc
     */
    public function addHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }
}
