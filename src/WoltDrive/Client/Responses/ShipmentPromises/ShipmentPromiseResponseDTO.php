<?php
/**
 * Description of ShipmentPromiseResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Responses\ShipmentPromises;

use Dots\WoltDrive\Client\Resources\Dropoff;
use Dots\WoltDrive\Client\Resources\Pickup;
use Dots\WoltDrive\Client\Resources\Price;
use Dots\WoltDrive\Client\Responses\WoltDriveResponseDTO;

class ShipmentPromiseResponseDTO extends WoltDriveResponseDTO
{
    protected string $id;

    protected string $created_at;

    protected string $valid_until;

    protected Pickup $pickup;

    protected Dropoff $dropoff;

    protected Price $price;

    protected bool $is_binding;

    protected array $parcels = [];

    public function getId(): string
    {
        return $this->id;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function getValidUntil(): string
    {
        return $this->valid_until;
    }

    public function getPickup(): Pickup
    {
        return $this->pickup;
    }

    public function getDropoff(): Dropoff
    {
        return $this->dropoff;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }

    public function isBinding(): bool
    {
        return $this->is_binding;
    }

    public function getParcels(): array
    {
        return $this->parcels;
    }
}
