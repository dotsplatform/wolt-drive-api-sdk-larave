<?php
/**
 * Description of LocationWebhookPayloadDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources\Webhook;

use Dots\Data\DTO;
use Dots\WoltDrive\Client\Resources\Consts\WebhookEventType;

class LocationWebhookPayloadDTO extends DTO
{
    protected string $dispatched_at;

    protected WebhookEventType $type;

    protected LocationWebhookDetailsDTO $details;

    public function getDispatchedAt(): string
    {
        return $this->dispatched_at;
    }

    public function getType(): WebhookEventType
    {
        return $this->type;
    }

    public function getDetails(): LocationWebhookDetailsDTO
    {
        return $this->details;
    }
}
