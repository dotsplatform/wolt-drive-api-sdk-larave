<?php
/**
 * Description of HandshakeDeliveryResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Responses\Orders;

use Dots\WoltDrive\Client\Responses\WoltDriveResponseDTO;

class HandshakeDeliveryResponseDTO extends WoltDriveResponseDTO
{
    protected bool $is_required;

    protected ?int $pin_code;

    public function isRequired(): bool
    {
        return $this->is_required;
    }

    public function getPinCode(): ?int
    {
        return $this->pin_code;
    }
}
