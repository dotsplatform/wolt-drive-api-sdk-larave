<?php
/**
 * Description of WebhookListWoltDriveCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Commands;

use Dots\WoltDrive\Client\Exceptions\WoltDriveException;

class WebhookListWoltDriveCommand extends BaseWoltDriveCommand
{
    public $signature = 'wolt-drive:webhooks:list {merchantId}';

    public function handle(): void
    {
        $connector = $this->getWoltDriveConnector();

        try {
            $response = $connector->listWebhooks(
                $this->argument('merchantId'),
            );

            $webhooks = $response->getWebhooks();
            $this->info('Webhooks count: ' . count($webhooks));

            foreach ($webhooks as $webhook) {
                $this->line('ID: ' . $webhook->getId() . ' | URL: ' . $webhook->getCallbackUrl());
            }
        } catch (WoltDriveException $e) {
            $this->error($e->getErrorResponseDTO()->getMessage());
        }
    }
}
