<?php
/**
 * Description of CreateDeliveryOrderRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\DeliveryOrders;

use Dots\WoltDrive\Client\Requests\DeliveryOrders\DTO\CreateDeliveryOrderDTO;
use Dots\WoltDrive\Client\Requests\PostWoltDriveRequest;
use Dots\WoltDrive\Client\Responses\DeliveryOrders\VenuelessDeliveryOrderResponseDTO;
use Saloon\Http\Response;

class CreateDeliveryOrderRequest extends PostWoltDriveRequest
{
    private const string ENDPOINT_TEMPLATE = '/merchants/%s/delivery-order';

    public function __construct(
        protected readonly string $merchantId,
        protected readonly CreateDeliveryOrderDTO $dto,
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

    public function createDtoFromResponse(Response $response): VenuelessDeliveryOrderResponseDTO
    {
        return VenuelessDeliveryOrderResponseDTO::fromResponse($response);
    }
}
