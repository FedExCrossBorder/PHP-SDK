<?php

namespace FedExCrossBorder\Exception;

class HttpException extends \RuntimeException implements ExceptionInterface
{

    private $apiProblem;

    /**
     * HttpException constructor
     *
     * @param string $message
     * @param int $code
     * @param mixed $apiProblem
     */
    public function __construct($message = "", $code, $apiProblem)
    {
        parent::__construct($message, $code);

        $type = isset($apiProblem->type) ? $apiProblem->type : "";
        $detail = isset($apiProblem->detail) ? $apiProblem->detail : "";
        $status = isset($apiProblem->status) ? $apiProblem->status : null;
        $title = isset($apiProblem->title) ? $apiProblem->title : "";
        $this->apiProblem = new ApiProblem($type, $detail, $status, $title);
    }

    /**
     * @return ApiProblem
     */
    public function getApiProblem()
    {
        return $this->apiProblem;
    }

}
