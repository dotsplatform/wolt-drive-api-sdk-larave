<?php
/**
 * Description of ShipmentPromiseSuccessResponseGenerator.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Mock\Data;

class ShipmentPromiseSuccessResponseGenerator
{
    public static function generate(array $data = []): array
    {
        return array_merge([
            'id' => 'sp_' . uniqid(),
            'created_at' => now()->toIso8601String(),
            'valid_until' => now()->addMinutes(10)->toIso8601String(),
            'pickup' => [
                'venue_id' => 'venue_test_123',
                'location' => [
                    'coordinates' => ['lat' => 50.4501, 'lon' => 30.5234],
                    'formatted_address' => 'Test Pickup Address',
                ],
                'options' => ['min_preparation_time_minutes' => 30],
                'eta_minutes' => 5,
            ],
            'dropoff' => [
                'location' => [
                    'coordinates' => ['lat' => 50.4601, 'lon' => 30.5334],
                    'formatted_address' => 'Test Dropoff Address',
                ],
                'eta_minutes' => 25,
            ],
            'price' => [
                'amount' => 5000,
                'currency' => 'UAH',
            ],
            'is_binding' => true,
            'parcels' => [],
        ], $data);
    }
}
