<?php
/**
 * Description of AvailableVenueDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Responses\AvailableVenues;

use Dots\Data\DTO;
use Dots\WoltDrive\Client\Resources\Location;
use Dots\WoltDrive\Client\Resources\PreEstimate;
use Dots\WoltDrive\Client\Resources\Price;

class AvailableVenueDTO extends DTO
{
    protected ?array $pickup;

    protected ?Price $fee;

    protected ?PreEstimate $pre_estimate;

    protected ?string $scheduled_dropoff_time;

    public function getPickup(): ?array
    {
        return $this->pickup;
    }

    public function getFee(): ?Price
    {
        return $this->fee;
    }

    public function getPreEstimate(): ?PreEstimate
    {
        return $this->pre_estimate;
    }

    public function getScheduledDropoffTime(): ?string
    {
        return $this->scheduled_dropoff_time;
    }
}
