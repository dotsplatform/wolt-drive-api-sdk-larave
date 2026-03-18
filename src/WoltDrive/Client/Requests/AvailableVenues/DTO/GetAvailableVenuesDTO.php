<?php
/**
 * Description of GetAvailableVenuesDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\AvailableVenues\DTO;

use Dots\Data\DTO;

class GetAvailableVenuesDTO extends DTO
{
    protected array $dropoff;

    protected ?string $scheduled_dropoff_time;

    public function getDropoff(): array
    {
        return $this->dropoff;
    }

    public function getScheduledDropoffTime(): ?string
    {
        return $this->scheduled_dropoff_time;
    }
}
