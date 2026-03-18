<?php
/**
 * Description of WoltDriveResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Responses;

use Dots\Data\DTO;
use Saloon\Http\Response;

abstract class WoltDriveResponseDTO extends DTO
{
    public static function fromResponse(Response $response): static
    {
        return static::fromArray($response->json());
    }
}
