<?php
/**
 * Description of AvailableVenuesResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Responses\AvailableVenues;

use Dots\Data\DTO;
use Saloon\Http\Response;

class AvailableVenuesResponseDTO extends DTO
{
    protected array $venues = [];

    public static function fromResponse(Response $response): static
    {
        $data = $response->json();

        $venues = array_map(
            fn (array $venue) => AvailableVenueDTO::fromArray($venue),
            $data,
        );

        return static::fromArray(['venues' => $venues]);
    }

    public function getVenues(): array
    {
        return $this->venues;
    }
}
