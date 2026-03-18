<?php
/**
 * Description of DeleteWebhookRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\Webhooks;

use Dots\WoltDrive\Client\Requests\DeleteWoltDriveRequest;

class DeleteWebhookRequest extends DeleteWoltDriveRequest
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
}
