<?php
/**
 * Description of CreateWebhookRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\Webhooks;

use Dots\WoltDrive\Client\Requests\PostWoltDriveRequest;
use Dots\WoltDrive\Client\Requests\Webhooks\DTO\CreateWebhookDTO;
use Dots\WoltDrive\Client\Responses\Webhooks\WebhookResponseDTO;
use Saloon\Http\Response;

class CreateWebhookRequest extends PostWoltDriveRequest
{
    private const string ENDPOINT_TEMPLATE = '/v1/merchants/%s/webhooks';

    public function __construct(
        protected readonly string $merchantId,
        protected readonly CreateWebhookDTO $dto,
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->dto->toArray();
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT_TEMPLATE, $this->merchantId);
    }

    public function createDtoFromResponse(Response $response): WebhookResponseDTO
    {
        return WebhookResponseDTO::fromResponse($response);
    }
}
