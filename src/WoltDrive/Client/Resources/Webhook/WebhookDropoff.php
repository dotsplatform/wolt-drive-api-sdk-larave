<?php
/**
 * Description of WebhookDropoff.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources\Webhook;

use Dots\Data\DTO;
use Dots\WoltDrive\Client\Resources\DropoffEta;

class WebhookDropoff extends DTO
{
    protected ?DropoffEta $eta;

    protected ?string $completed_at;

    public function getEta(): ?DropoffEta
    {
        return $this->eta;
    }

    public function getCompletedAt(): ?string
    {
        return $this->completed_at;
    }
}
