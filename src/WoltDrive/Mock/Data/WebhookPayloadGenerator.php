<?php
/**
 * Description of WebhookPayloadGenerator.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Mock\Data;

class WebhookPayloadGenerator
{
    public static function generateOrderWebhook(string $eventType, array $data = []): array
    {
        return array_merge([
            'dispatched_at' => now()->toIso8601String(),
            'type' => $eventType,
            'details' => array_merge([
                'id' => 'del_' . uniqid(),
                'venue_id' => 'venue_test_123',
                'wolt_order_reference_id' => 'wolt_ref_' . uniqid(),
                'tracking_reference' => 'trk_' . uniqid(),
                'merchant_order_reference_id' => 'merchant_ref_' . uniqid(),
                'order_number' => 'A1B2C',
                'price' => [
                    'amount' => 5000,
                    'currency' => 'UAH',
                ],
                'pickup' => [
                    'eta' => now()->addMinutes(5)->toIso8601String(),
                ],
                'dropoff' => [
                    'eta' => [
                        'min' => now()->addMinutes(20)->toIso8601String(),
                        'max' => now()->addMinutes(30)->toIso8601String(),
                    ],
                ],
                'courier' => [
                    'id' => 12345,
                    'vehicle_type' => 'car',
                ],
                'parcels' => [],
            ], $data['details'] ?? []),
        ], array_diff_key($data, ['details' => true]));
    }

    public static function generateLocationWebhook(array $data = []): array
    {
        return array_merge([
            'dispatched_at' => now()->toIso8601String(),
            'type' => 'order.location_updated',
            'details' => array_merge([
                'id' => 'del_' . uniqid(),
                'wolt_order_reference_id' => 'wolt_ref_' . uniqid(),
                'merchant_order_reference_id' => 'merchant_ref_' . uniqid(),
                'order_number' => 'A1B2C',
                'tracking_id' => 'trk_' . uniqid(),
                'courier_location' => [
                    'lat' => 50.4550,
                    'lon' => 30.5280,
                ],
            ], $data['details'] ?? []),
        ], array_diff_key($data, ['details' => true]));
    }
}
