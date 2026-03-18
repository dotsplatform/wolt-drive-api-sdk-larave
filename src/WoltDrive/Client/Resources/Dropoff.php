<?php
/**
 * Description of Dropoff.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class Dropoff extends DTO
{
    protected ?Location $location;

    protected ?DropoffOptions $options;

    protected ?int $eta_minutes;

    protected ?string $eta;

    protected ?string $comment;

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function getOptions(): ?DropoffOptions
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
}
