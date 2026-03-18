<?php
/**
 * Description of GetDeliveryAreasRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\DeliveryAreas;

use Dots\WoltDrive\Client\Requests\BaseWoltDriveRequest;
use Dots\WoltDrive\Client\Responses\DeliveryAreas\DeliveryAreasResponseDTO;
use Saloon\Http\Response;

class GetDeliveryAreasRequest extends BaseWoltDriveRequest
{
    private const string ENDPOINT_TEMPLATE = '/merchants/%s/delivery-areas';

    public function __construct(
        protected readonly string $merchantId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT_TEMPLATE, $this->merchantId);
    }

    public function createDtoFromResponse(Response $response): DeliveryAreasResponseDTO
    {
        return DeliveryAreasResponseDTO::fromResponse($response);
    }
}
