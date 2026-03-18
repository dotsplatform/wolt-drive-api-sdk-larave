<?php
/**
 * Description of CancelOrderDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\Orders\DTO;

use Dots\Data\DTO;

class CancelOrderDTO extends DTO
{
    protected string $reason;

    public function getReason(): string
    {
        return $this->reason;
    }
}
