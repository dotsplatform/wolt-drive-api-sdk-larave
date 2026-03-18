<?php
/**
 * Description of WebhookPickup.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources\Webhook;

use Dots\Data\DTO;

class WebhookPickup extends DTO
{
    protected ?string $eta;

    public function getEta(): ?string
    {
        return $this->eta;
    }
}
