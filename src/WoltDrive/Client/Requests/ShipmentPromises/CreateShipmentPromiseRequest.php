<?php
/**
 * Description of CreateShipmentPromiseRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\ShipmentPromises;

use Dots\WoltDrive\Client\Requests\PostWoltDriveRequest;
use Dots\WoltDrive\Client\Requests\ShipmentPromises\DTO\CreateShipmentPromiseDTO;
use Dots\WoltDrive\Client\Responses\ShipmentPromises\ShipmentPromiseResponseDTO;
use Saloon\Http\Response;

class CreateShipmentPromiseRequest extends PostWoltDriveRequest
{
    private const string ENDPOINT_TEMPLATE = '/v1/venues/%s/shipment-promises';

    public function __construct(
        protected readonly string $venueId,
        protected readonly CreateShipmentPromiseDTO $dto,
    ) {
    }

    protected function defaultBody(): array
    {
        return array_filter($this->dto->toArray(), fn ($value) => $value !== null);
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT_TEMPLATE, $this->venueId);
    }

    public function createDtoFromResponse(Response $response): ShipmentPromiseResponseDTO
    {
        return ShipmentPromiseResponseDTO::fromResponse($response);
    }
}
