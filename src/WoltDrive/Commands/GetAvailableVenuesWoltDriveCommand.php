<?php
/**
 * Description of GetAvailableVenuesWoltDriveCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Commands;

use Dots\WoltDrive\Client\Exceptions\WoltDriveException;
use Dots\WoltDrive\Client\Requests\AvailableVenues\DTO\GetAvailableVenuesDTO;

class GetAvailableVenuesWoltDriveCommand extends BaseWoltDriveCommand
{
    public $signature = 'wolt-drive:venues:available {merchantId} {lat} {lon}';

    public function handle(): void
    {
        $connector = $this->getWoltDriveConnector();

        try {
            $response = $connector->getAvailableVenues(
                $this->argument('merchantId'),
                GetAvailableVenuesDTO::fromArray([
                    'dropoff' => [
                        'location' => [
                            'coordinates' => [
                                'lat' => (float) $this->argument('lat'),
                                'lon' => (float) $this->argument('lon'),
                            ],
                        ],
                    ],
                ]),
            );

            $this->info('Available venues: ' . count($response->getVenues()));
        } catch (WoltDriveException $e) {
            $this->error($e->getErrorResponseDTO()->getMessage());
        }
    }
}
