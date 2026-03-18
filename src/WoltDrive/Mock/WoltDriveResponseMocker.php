<?php
/**
 * Description of WoltDriveResponseMocker.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Mock;

use Dots\WoltDrive\Client\Requests\Deliveries\CreateDeliveryRequest;
use Dots\WoltDrive\Client\Requests\Orders\CancelOrderRequest;
use Dots\WoltDrive\Client\Requests\ShipmentPromises\CreateShipmentPromiseRequest;
use Dots\WoltDrive\Mock\Data\DeliveryOrderSuccessResponseGenerator;
use Dots\WoltDrive\Mock\Data\ShipmentPromiseSuccessResponseGenerator;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

class WoltDriveResponseMocker
{
    public static function mockSuccessCreateDelivery(array $data = []): array
    {
        $promiseData = ShipmentPromiseSuccessResponseGenerator::generate();
        $deliveryData = DeliveryOrderSuccessResponseGenerator::generate($data);

        MockClient::global([
            CreateShipmentPromiseRequest::class => MockResponse::make($promiseData, 201),
            CreateDeliveryRequest::class => MockResponse::make($deliveryData, 201),
        ]);

        return $deliveryData;
    }

    public static function mockSuccessCreateShipmentPromise(array $data = []): array
    {
        $promiseData = ShipmentPromiseSuccessResponseGenerator::generate($data);

        MockClient::global([
            CreateShipmentPromiseRequest::class => MockResponse::make($promiseData, 201),
        ]);

        return $promiseData;
    }

    public static function mockSuccessCancelOrder(): void
    {
        MockClient::global([
            CancelOrderRequest::class => MockResponse::make(['status' => 'REJECTED']),
        ]);
    }
}
