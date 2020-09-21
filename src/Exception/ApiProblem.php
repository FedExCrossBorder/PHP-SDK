<?php

namespace FedExCrossBorder\Exception;

use Exception;
use Throwable;

class ApiProblem
{

    /**
     * URL describing the problem type; defaults to HTTP status codes.
     *
     * @var string
     */
    protected $type = 'http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html';

    /**
     * Description of the specific problem.
     *
     * @var string|Exception|Throwable
     */
    protected $detail = '';

    /**
     * HTTP status for the error.
     *
     * @var int
     */
    protected $status;

    /**
     * Title of the error.
     *
     * @var string
     */
    protected $title;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return Exception|string|Throwable
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param Exception|string|Throwable $detail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * ApiProblem constructor.
     * @param string $type
     * @param Exception|string|Throwable $detail
     * @param int $status
     * @param string $title
     */
    public function __construct($type, $detail, $status, $title)
    {
        $this->type = $type;
        $this->detail = $detail;
        $this->status = $status;
        $this->title = $title;
    }
}