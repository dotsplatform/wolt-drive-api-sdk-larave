<?php
/**
 * Description of UpdateWebhookRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\Webhooks;

use Dots\WoltDrive\Client\Requests\PatchWoltDriveRequest;
use Dots\WoltDrive\Client\Requests\Webhooks\DTO\UpdateWebhookDTO;
use Dots\WoltDrive\Client\Responses\Webhooks\WebhookResponseDTO;
use Saloon\Http\Response;

class UpdateWebhookRequest extends PatchWoltDriveRequest
{
    private const string ENDPOINT_TEMPLATE = '/v1/merchants/%s/webhooks/%s';

    public function __construct(
        protected readonly string $merchantId,
        protected readonly string $webhookId,
        protected readonly UpdateWebhookDTO $dto,
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->dto->toArray();
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT_TEMPLATE, $this->merchantId, $this->webhookId);
    }

    public function createDtoFromResponse(Response $response): WebhookResponseDTO
    {
        return WebhookResponseDTO::fromResponse($response);
    }
}
