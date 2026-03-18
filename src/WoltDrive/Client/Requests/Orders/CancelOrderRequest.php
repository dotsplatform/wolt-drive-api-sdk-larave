<?php
/**
 * Description of CancelOrderRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\Orders;

use Dots\WoltDrive\Client\Requests\Orders\DTO\CancelOrderDTO;
use Dots\WoltDrive\Client\Requests\PatchWoltDriveRequest;
use Dots\WoltDrive\Client\Responses\Orders\CancelOrderResponseDTO;
use Saloon\Http\Response;

class CancelOrderRequest extends PatchWoltDriveRequest
{
    private const string ENDPOINT_TEMPLATE = '/order/%s/status/cancel';

    public function __construct(
        protected readonly string $woltOrderReferenceId,
        protected readonly CancelOrderDTO $dto,
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->dto->toArray();
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT_TEMPLATE, $this->woltOrderReferenceId);
    }

    public function createDtoFromResponse(Response $response): CancelOrderResponseDTO
    {
        return CancelOrderResponseDTO::fromResponse($response);
    }
}
