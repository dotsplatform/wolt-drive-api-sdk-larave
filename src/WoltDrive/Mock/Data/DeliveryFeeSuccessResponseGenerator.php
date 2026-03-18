<?php
/**
 * Description of DeliveryFeeSuccessResponseGenerator.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Mock\Data;

class DeliveryFeeSuccessResponseGenerator
{
    public static function generate(array $data = []): array
    {
        return array_merge([
            'created_at' => now()->toIso8601String(),
            'pickup' => [
                'location' => [
                    'coordinates' => ['lat' => 50.4501, 'lon' => 30.5234],
                    'formatted_address' => 'Test Pickup Address',
                ],
            ],
            'dropoff' => [
                'location' => [
                    'coordinates' => ['lat' => 50.4601, 'lon' => 30.5334],
                    'formatted_address' => 'Test Dropoff Address',
                ],
            ],
            'fee' => [
                'amount' => 4500,
                'currency' => 'UAH',
            ],
            'time_estimate_minutes' => 30,
        ], $data);
    }
}
