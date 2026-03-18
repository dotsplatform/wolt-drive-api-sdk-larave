<?php
/**
 * Description of DeliveryAreasWoltDriveCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Commands;

use Dots\WoltDrive\Client\Exceptions\WoltDriveException;

class DeliveryAreasWoltDriveCommand extends BaseWoltDriveCommand
{
    public $signature = 'wolt-drive:delivery-areas:get {merchantId}';

    public function handle(): void
    {
        $connector = $this->getWoltDriveConnector();

        try {
            $response = $connector->getDeliveryAreas(
                $this->argument('merchantId'),
            );

            $this->info('Delivery areas: ' . count($response->getDeliveryAreas()));
            $this->line(json_encode($response->getDeliveryAreas(), JSON_PRETTY_PRINT));
        } catch (WoltDriveException $e) {
            $this->error($e->getErrorResponseDTO()->getMessage());
        }
    }
}
