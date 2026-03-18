<?php
/**
 * Description of CancelOrderResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Responses\Orders;

use Dots\WoltDrive\Client\Responses\WoltDriveResponseDTO;

class CancelOrderResponseDTO extends WoltDriveResponseDTO
{
    protected string $status;

    public function getStatus(): string
    {
        return $this->status;
    }
}
