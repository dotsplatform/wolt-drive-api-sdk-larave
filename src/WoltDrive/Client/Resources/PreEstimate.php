<?php
/**
 * Description of PreEstimate.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class PreEstimate extends DTO
{
    protected ?int $pickup_minutes;

    protected ?int $delivery_minutes;

    protected ?TotalMinutes $total_minutes;

    public function getPickupMinutes(): ?int
    {
        return $this->pickup_minutes;
    }

    public function getDeliveryMinutes(): ?int
    {
        return $this->delivery_minutes;
    }

    public function getTotalMinutes(): ?TotalMinutes
    {
        return $this->total_minutes;
    }
}
