<?php
/**
 * Description of CreateDeliveryRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\Deliveries;

use Dots\WoltDrive\Client\Requests\Deliveries\DTO\CreateDeliveryDTO;
use Dots\WoltDrive\Client\Requests\PostWoltDriveRequest;
use Dots\WoltDrive\Client\Responses\Deliveries\DeliveryOrderResponseDTO;
use Saloon\Http\Response;

class CreateDeliveryRequest extends PostWoltDriveRequest
{
    private const string ENDPOINT_TEMPLATE = '/v1/venues/%s/deliveries';

    public function __construct(
        protected readonly string $venueId,
        protected readonly CreateDeliveryDTO $dto,
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->filterNullValues($this->dto->toArray());
    }

    private function filterNullValues(array $data): array
    {
        $filtered = [];

        foreach ($data as $key => $value) {
            if ($value === null) {
                continue;
            }

            if (is_array($value) && ! array_is_list($value)) {
                $filtered[$key] = $this->filterNullValues($value);
            } else {
                $filtered[$key] = $value;
            }
        }

        return $filtered;
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT_TEMPLATE, $this->venueId);
    }

    public function createDtoFromResponse(Response $response): DeliveryOrderResponseDTO
    {
        return DeliveryOrderResponseDTO::fromResponse($response);
    }
}
