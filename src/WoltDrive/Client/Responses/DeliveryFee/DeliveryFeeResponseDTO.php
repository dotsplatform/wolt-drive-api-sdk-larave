<?php
/**
 * Description of DeliveryFeeResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Responses\DeliveryFee;

use Dots\WoltDrive\Client\Resources\Dropoff;
use Dots\WoltDrive\Client\Resources\Pickup;
use Dots\WoltDrive\Client\Resources\Price;
use Dots\WoltDrive\Client\Responses\WoltDriveResponseDTO;

class DeliveryFeeResponseDTO extends WoltDriveResponseDTO
{
    protected string $created_at;

    protected Pickup $pickup;

    protected Dropoff $dropoff;

    protected Price $fee;

    protected ?int $time_estimate_minutes;

    protected ?string $scheduled_dropoff_time;

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function getPickup(): Pickup
    {
        return $this->pickup;
    }

    public function getDropoff(): Dropoff
    {
        return $this->dropoff;
    }

    public function getFee(): Price
    {
        return $this->fee;
    }

    public function getTimeEstimateMinutes(): ?int
    {
        return $this->time_estimate_minutes;
    }

    public function getScheduledDropoffTime(): ?string
    {
        return $this->scheduled_dropoff_time;
    }
}
