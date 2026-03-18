<?php

return [
    'stageEnv' => true,

    'auth' => [
        'merchantKey' => env('WOLT_DRIVE_MERCHANT_KEY'),
        'merchantId' => env('WOLT_DRIVE_MERCHANT_ID'),
        'venueId' => env('WOLT_DRIVE_VENUE_ID'),
        'webhookSecret' => env('WOLT_DRIVE_WEBHOOK_SECRET'),
    ],

    'webhooks' => [
        'delivery' => [
            'url' => env('WOLT_DRIVE_DELIVERY_WEBHOOK_URL'),
        ],
        'location' => [
            'url' => env('WOLT_DRIVE_LOCATION_WEBHOOK_URL'),
        ],
    ],
];
