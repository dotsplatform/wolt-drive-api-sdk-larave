<?php
/**
 * Description of GetAvailableVenuesRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\AvailableVenues;

use Dots\WoltDrive\Client\Requests\AvailableVenues\DTO\GetAvailableVenuesDTO;
use Dots\WoltDrive\Client\Requests\PostWoltDriveRequest;
use Dots\WoltDrive\Client\Responses\AvailableVenues\AvailableVenuesResponseDTO;
use Saloon\Http\Response;

class GetAvailableVenuesRequest extends PostWoltDriveRequest
{
    private const string ENDPOINT_TEMPLATE = '/merchants/%s/available-venues';

    public function __construct(
        protected readonly string $merchantId,
        protected readonly GetAvailableVenuesDTO $dto,
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->dto->toArray();
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT_TEMPLATE, $this->merchantId);
    }

    public function createDtoFromResponse(Response $response): AvailableVenuesResponseDTO
    {
        return AvailableVenuesResponseDTO::fromResponse($response);
    }
}
