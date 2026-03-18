<?php
/**
 * Description of WebhooksListResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Responses\Webhooks;

use Dots\Data\DTO;
use Saloon\Http\Response;

class WebhooksListResponseDTO extends DTO
{
    protected array $webhooks = [];

    public static function fromResponse(Response $response): static
    {
        $data = $response->json();

        $webhooks = array_map(
            fn (array $webhook) => WebhookResponseDTO::fromArray($webhook),
            $data,
        );

        return static::fromArray(['webhooks' => $webhooks]);
    }

    public function getWebhooks(): array
    {
        return $this->webhooks;
    }
}
