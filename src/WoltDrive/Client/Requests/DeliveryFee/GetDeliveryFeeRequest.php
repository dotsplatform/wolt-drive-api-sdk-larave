<?php
/**
 * Description of GetDeliveryFeeRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\DeliveryFee;

use Dots\WoltDrive\Client\Requests\DeliveryFee\DTO\GetDeliveryFeeDTO;
use Dots\WoltDrive\Client\Requests\PostWoltDriveRequest;
use Dots\WoltDrive\Client\Responses\DeliveryFee\DeliveryFeeResponseDTO;
use Saloon\Http\Response;

class GetDeliveryFeeRequest extends PostWoltDriveRequest
{
    private const string ENDPOINT_TEMPLATE = '/merchants/%s/delivery-fee';

    public function __construct(
        protected readonly string $merchantId,
        protected readonly GetDeliveryFeeDTO $dto,
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

    public function createDtoFromResponse(Response $response): DeliveryFeeResponseDTO
    {
        return DeliveryFeeResponseDTO::fromResponse($response);
    }
}
