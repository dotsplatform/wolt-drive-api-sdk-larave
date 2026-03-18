<?php
/**
 * Description of GetWebhookRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\Webhooks;

use Dots\WoltDrive\Client\Requests\BaseWoltDriveRequest;
use Dots\WoltDrive\Client\Responses\Webhooks\WebhookResponseDTO;
use Saloon\Http\Response;

class GetWebhookRequest extends BaseWoltDriveRequest
{
    private const string ENDPOINT_TEMPLATE = '/v1/merchants/%s/webhooks/%s';

    public function __construct(
        protected readonly string $merchantId,
        protected readonly string $webhookId,
    ) {
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
