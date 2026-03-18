<?php
/**
 * Description of GetHandshakeDeliveryRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\Orders;

use Dots\WoltDrive\Client\Requests\BaseWoltDriveRequest;
use Dots\WoltDrive\Client\Responses\Orders\HandshakeDeliveryResponseDTO;
use Saloon\Http\Response;

class GetHandshakeDeliveryRequest extends BaseWoltDriveRequest
{
    private const string ENDPOINT_TEMPLATE = '/order/%s/handshake-delivery';

    public function __construct(
        protected readonly string $woltOrderReferenceId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT_TEMPLATE, $this->woltOrderReferenceId);
    }

    public function createDtoFromResponse(Response $response): HandshakeDeliveryResponseDTO
    {
        return HandshakeDeliveryResponseDTO::fromResponse($response);
    }
}
