<?php
/**
 * Description of Location.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class Location extends DTO
{
    protected Coordinates $coordinates;

    protected ?string $formatted_address;

    public function getCoordinates(): Coordinates
    {
        return $this->coordinates;
    }

    public function getFormattedAddress(): ?string
    {
        return $this->formatted_address;
    }
}
