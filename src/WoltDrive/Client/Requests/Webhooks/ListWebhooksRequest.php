<?php
/**
 * Description of ListWebhooksRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\Webhooks;

use Dots\WoltDrive\Client\Requests\BaseWoltDriveRequest;
use Dots\WoltDrive\Client\Responses\Webhooks\WebhooksListResponseDTO;
use Saloon\Http\Response;

class ListWebhooksRequest extends BaseWoltDriveRequest
{
    private const string ENDPOINT_TEMPLATE = '/v1/merchants/%s/webhooks';

    public function __construct(
        protected readonly string $merchantId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT_TEMPLATE, $this->merchantId);
    }

    public function createDtoFromResponse(Response $response): WebhooksListResponseDTO
    {
        return WebhooksListResponseDTO::fromResponse($response);
    }
}
