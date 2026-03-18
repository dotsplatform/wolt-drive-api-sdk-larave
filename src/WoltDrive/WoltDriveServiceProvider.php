<?php
/**
 * Description of WoltDriveServiceProvider.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive;

use Dots\WoltDrive\Client\DTO\WoltDriveAuthDTO;
use Dots\WoltDrive\Client\WoltDriveConnector;
use Dots\WoltDrive\Commands\CancelOrderWoltDriveCommand;
use Dots\WoltDrive\Commands\CreateDeliveryWoltDriveCommand;
use Dots\WoltDrive\Commands\CreateShipmentPromiseWoltDriveCommand;
use Dots\WoltDrive\Commands\DeliveryAreasWoltDriveCommand;
use Dots\WoltDrive\Commands\GetAvailableVenuesWoltDriveCommand;
use Dots\WoltDrive\Commands\GetDeliveryFeeWoltDriveCommand;
use Dots\WoltDrive\Commands\WebhookCreateWoltDriveCommand;
use Dots\WoltDrive\Commands\WebhookDeleteWoltDriveCommand;
use Dots\WoltDrive\Commands\WebhookListWoltDriveCommand;
use Illuminate\Support\ServiceProvider;

class WoltDriveServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../../config/wolt-drive.php' => config_path('wolt-drive.php'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->registerArtisanCommands();
        }

        $this->app->bind(WoltDriveConnector::class, function () {
            return new WoltDriveConnector(
                WoltDriveAuthDTO::fromArray([
                    'merchantKey' => config('wolt-drive.auth.merchantKey'),
                    'merchantId' => config('wolt-drive.auth.merchantId'),
                    'venueId' => config('wolt-drive.auth.venueId'),
                    'webhookSecret' => config('wolt-drive.auth.webhookSecret'),
                ]),
            );
        });
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/wolt-drive.php',
            'wolt-drive',
        );
    }

    protected function registerArtisanCommands(): void
    {
        $this->commands([
            CreateShipmentPromiseWoltDriveCommand::class,
            CreateDeliveryWoltDriveCommand::class,
            GetDeliveryFeeWoltDriveCommand::class,
            GetAvailableVenuesWoltDriveCommand::class,
            CancelOrderWoltDriveCommand::class,
            DeliveryAreasWoltDriveCommand::class,
            WebhookCreateWoltDriveCommand::class,
            WebhookListWoltDriveCommand::class,
            WebhookDeleteWoltDriveCommand::class,
        ]);
    }
}
