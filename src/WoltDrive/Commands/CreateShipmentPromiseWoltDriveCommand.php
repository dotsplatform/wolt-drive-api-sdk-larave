<?php
/**
 * Description of CreateShipmentPromiseWoltDriveCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Commands;

use Dots\WoltDrive\Client\Exceptions\WoltDriveException;
use Dots\WoltDrive\Client\Requests\ShipmentPromises\DTO\CreateShipmentPromiseDTO;

class CreateShipmentPromiseWoltDriveCommand extends BaseWoltDriveCommand
{
    public $signature = 'wolt-drive:shipment-promise:create {venueId} {lat} {lon}';

    public function handle(): void
    {
        $connector = $this->getWoltDriveConnector();

        try {
            $response = $connector->createShipmentPromise(
                $this->argument('venueId'),
                CreateShipmentPromiseDTO::fromArray([
                    'lat' => (float) $this->argument('lat'),
                    'lon' => (float) $this->argument('lon'),
                ]),
            );

            $this->info('Shipment Promise ID: ' . $response->getId());
            $this->info('Price: ' . $response->getPrice()->getAmount() . ' ' . $response->getPrice()->getCurrency());
            $this->info('Valid until: ' . $response->getValidUntil());
            $this->info('Binding: ' . ($response->isBinding() ? 'yes' : 'no'));
        } catch (WoltDriveException $e) {
            $this->error($e->getErrorResponseDTO()->getMessage());
        }
    }
}
