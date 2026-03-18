<?php
/**
 * Description of GetDeliveryFeeWoltDriveCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Commands;

use Dots\WoltDrive\Client\Exceptions\WoltDriveException;
use Dots\WoltDrive\Client\Requests\DeliveryFee\DTO\GetDeliveryFeeDTO;

class GetDeliveryFeeWoltDriveCommand extends BaseWoltDriveCommand
{
    public $signature = 'wolt-drive:delivery-fee:get {merchantId} {pickupLat} {pickupLon} {dropoffLat} {dropoffLon}';

    public function handle(): void
    {
        $connector = $this->getWoltDriveConnector();

        try {
            $response = $connector->getDeliveryFee(
                $this->argument('merchantId'),
                GetDeliveryFeeDTO::fromArray([
                    'pickup' => [
                        'location' => [
                            'coordinates' => [
                                'lat' => (float) $this->argument('pickupLat'),
                                'lon' => (float) $this->argument('pickupLon'),
                            ],
                        ],
                    ],
                    'dropoff' => [
                        'location' => [
                            'coordinates' => [
                                'lat' => (float) $this->argument('dropoffLat'),
                                'lon' => (float) $this->argument('dropoffLon'),
                            ],
                        ],
                    ],
                ]),
            );

            $this->info('Fee: ' . $response->getFee()->getAmount() . ' ' . $response->getFee()->getCurrency());
            $this->info('Time estimate: ' . $response->getTimeEstimateMinutes() . ' minutes');
        } catch (WoltDriveException $e) {
            $this->error($e->getErrorResponseDTO()->getMessage());
        }
    }
}
