<?php
/**
 * Description of DeliveryOrderSuccessResponseGenerator.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Mock\Data;

class DeliveryOrderSuccessResponseGenerator
{
    public static function generate(array $data = []): array
    {
        return array_merge([
            'id' => 'del_' . uniqid(),
            'status' => 'INFO_RECEIVED',
            'tracking' => [
                'id' => 'trk_' . uniqid(),
                'url' => 'https://tracking.wolt.com/test',
            ],
            'pickup' => [
                'venue_id' => 'venue_test_123',
                'location' => [
                    'coordinates' => ['lat' => 50.4501, 'lon' => 30.5234],
                    'formatted_address' => 'Test Pickup Address',
                ],
                'options' => ['min_preparation_time_minutes' => 30],
                'eta' => now()->addMinutes(5)->toIso8601String(),
            ],
            'dropoff' => [
                'location' => [
                    'coordinates' => ['lat' => 50.4601, 'lon' => 30.5334],
                    'formatted_address' => 'Test Dropoff Address',
                ],
                'eta' => now()->addMinutes(25)->toIso8601String(),
            ],
            'price' => [
                'amount' => 5000,
                'currency' => 'UAH',
            ],
            'recipient' => [
                'name' => 'Test Customer',
                'phone_number' => '+380991234567',
            ],
            'parcels' => [],
            'customer_support' => [
                'url' => 'https://support.example.com',
                'email' => 'support@example.com',
                'phone_number' => '+380000000000',
            ],
            'wolt_order_reference_id' => 'wolt_ref_' . uniqid(),
            'merchant_order_reference_id' => 'merchant_ref_' . uniqid(),
            'tips' => [],
            'order_number' => 'A1B2C',
        ], $data);
    }
}
