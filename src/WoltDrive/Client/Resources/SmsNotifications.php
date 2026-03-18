<?php
/**
 * Description of SmsNotifications.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class SmsNotifications extends DTO
{
    protected ?string $received;

    protected ?string $picked_up;

    public function getReceived(): ?string
    {
        return $this->received;
    }

    public function getPickedUp(): ?string
    {
        return $this->picked_up;
    }
}
