<?php
/**
 * Description of WebhookCreateWoltDriveCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Commands;

use Dots\WoltDrive\Client\Exceptions\WoltDriveException;
use Dots\WoltDrive\Client\Requests\Webhooks\DTO\CreateWebhookDTO;
use Ramsey\Uuid\Uuid;

class WebhookCreateWoltDriveCommand extends BaseWoltDriveCommand
{
    public $signature = 'wolt-drive:webhooks:create {merchantId} {callbackUrl?}';

    public function handle(): void
    {
        $connector = $this->getWoltDriveConnector();
        $callbackUrl = $this->argument('callbackUrl')
            ?? config('wolt-drive.webhooks.delivery.url');

        try {
            $response = $connector->createWebhook(
                $this->argument('merchantId'),
                CreateWebhookDTO::fromArray([
                    'callback_url' => $callbackUrl,
                    'client_secret' => config('wolt-drive.auth.webhookSecret') ?? Uuid::uuid7()->toString(),
                    'callback_config' => [
                        'exponential_retry_backoff' => [
                            'exponent_base' => 2,
                            'max_retry_count' => 5,
                        ],
                    ],
                ]),
            );

            $this->info('Webhook created. ID: ' . $response->getId());
        } catch (WoltDriveException $e) {
            $this->error($e->getErrorResponseDTO()->getMessage());
        }
    }
}
