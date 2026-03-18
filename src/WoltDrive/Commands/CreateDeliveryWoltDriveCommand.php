<?php
/**
 * Description of CreateDeliveryWoltDriveCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Commands;

use Dots\WoltDrive\Client\Exceptions\WoltDriveException;
use Dots\WoltDrive\Client\Requests\Deliveries\DTO\CreateDeliveryDTO;

class CreateDeliveryWoltDriveCommand extends BaseWoltDriveCommand
{
    public $signature = 'wolt-drive:delivery:create {venueId} {shipmentPromiseId} {recipientName} {recipientPhone} {lat} {lon}';

    public function handle(): void
    {
        $connector = $this->getWoltDriveConnector();

        try {
            $response = $connector->createDelivery(
                $this->argument('venueId'),
                CreateDeliveryDTO::fromArray([
                    'shipment_promise_id' => $this->argument('shipmentPromiseId'),
                    'recipient' => [
                        'name' => $this->argument('recipientName'),
                        'phone_number' => $this->argument('recipientPhone'),
                    ],
                    'dropoff' => [
                        'location' => [
                            'coordinates' => [
                                'lat' => (float) $this->argument('lat'),
                                'lon' => (float) $this->argument('lon'),
                            ],
                        ],
                    ],
                    'parcels' => [
                        ['count' => 1, 'description' => 'Food delivery'],
                    ],
                    'customer_support' => [
                        'url' => 'https://support.example.com',
                        'email' => 'support@example.com',
                        'phone_number' => '+380000000000',
                    ],
                ]),
            );

            $this->info('Delivery ID: ' . $response->getId());
            $this->info('Status: ' . $response->getStatus()->value);
            $this->info('Wolt Order Reference: ' . $response->getWoltOrderReferenceId());
            $this->info('Tracking URL: ' . $response->getTracking()->getUrl());
        } catch (WoltDriveException $e) {
            $this->error($e->getErrorResponseDTO()->getMessage());
        }
    }
}
