<?php
namespace FedExCrossBorder\Exception;

/**
 * Class FedExCrossBorderConfigurationException
 *
 * @package FedExCrossBorder\Exception
 */
class FedExCrossBorderConfigurationException extends \Exception
{
    /**
     * Default Constructor
     *
     * @param string|null $message
     * @param int  $code
     */
    public function __construct($message = null, $code = 0)
    {
        parent::__construct($message, $code);
    }
}
