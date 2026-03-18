<?php
/**
 * Description of WoltDriveException.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Exceptions;

use Dots\WoltDrive\Client\Responses\ErrorResponseDTO;
use Exception;
use Throwable;

class WoltDriveException extends Exception
{
    public function __construct(
        private readonly ErrorResponseDTO $errorResponseDTO,
        string $message = '',
        int $code = 0,
        ?Throwable $previous = null,
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function getErrorResponseDTO(): ErrorResponseDTO
    {
        return $this->errorResponseDTO;
    }
}
