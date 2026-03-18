<?php
/**
 * Description of CancelOrderWoltDriveCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Commands;

use Dots\WoltDrive\Client\Exceptions\WoltDriveException;
use Dots\WoltDrive\Client\Requests\Orders\DTO\CancelOrderDTO;

class CancelOrderWoltDriveCommand extends BaseWoltDriveCommand
{
    public $signature = 'wolt-drive:order:cancel {woltOrderReferenceId} {reason}';

    public function handle(): void
    {
        $connector = $this->getWoltDriveConnector();

        try {
            $response = $connector->cancelOrder(
                $this->argument('woltOrderReferenceId'),
                CancelOrderDTO::fromArray([
                    'reason' => $this->argument('reason'),
                ]),
            );

            $this->info('Order cancelled. Status: ' . $response->getStatus());
        } catch (WoltDriveException $e) {
            $this->error($e->getErrorResponseDTO()->getMessage());
        }
    }
}
