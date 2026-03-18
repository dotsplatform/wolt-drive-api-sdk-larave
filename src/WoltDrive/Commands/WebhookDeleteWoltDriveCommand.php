<?php
/**
 * Description of WebhookDeleteWoltDriveCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Commands;

use Dots\WoltDrive\Client\Exceptions\WoltDriveException;

class WebhookDeleteWoltDriveCommand extends BaseWoltDriveCommand
{
    public $signature = 'wolt-drive:webhooks:delete {merchantId} {webhookId}';

    public function handle(): void
    {
        $connector = $this->getWoltDriveConnector();

        try {
            $connector->deleteWebhook(
                $this->argument('merchantId'),
                $this->argument('webhookId'),
            );

            $this->info('Webhook deleted successfully.');
        } catch (WoltDriveException $e) {
            $this->error($e->getErrorResponseDTO()->getMessage());
        }
    }
}
