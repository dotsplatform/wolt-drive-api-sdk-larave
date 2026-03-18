<?php
/**
 * Description of Pickup.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class Pickup extends DTO
{
    protected ?string $venue_id;

    protected ?Location $location;

    protected ?PickupOptions $options;

    protected ?int $eta_minutes;

    protected ?string $eta;

    protected ?string $comment;

    protected ?string $display_name;

    public function getVenueId(): ?string
    {
        return $this->venue_id;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function getOptions(): ?PickupOptions
    {
        return $this->options;
    }

    public function getEtaMinutes(): ?int
    {
        return $this->eta_minutes;
    }

    public function getEta(): ?string
    {
        return $this->eta;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function getDisplayName(): ?string
    {
        return $this->display_name;
    }
}
