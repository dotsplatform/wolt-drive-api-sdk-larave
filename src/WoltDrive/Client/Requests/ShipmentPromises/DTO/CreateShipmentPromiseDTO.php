<?php
/**
 * Description of CreateShipmentPromiseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\ShipmentPromises\DTO;

use Dots\Data\DTO;

class CreateShipmentPromiseDTO extends DTO
{
    protected ?string $street;

    protected ?string $city;

    protected ?string $post_code;

    protected ?float $lat;

    protected ?float $lon;

    protected ?string $language;

    protected ?int $min_preparation_time_minutes;

    protected ?string $scheduled_dropoff_time;

    protected array $parcels = [];

    protected ?array $cash;

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function getPostCode(): ?string
    {
        return $this->post_code;
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function getLon(): ?float
    {
        return $this->lon;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function getMinPreparationTimeMinutes(): ?int
    {
        return $this->min_preparation_time_minutes;
    }

    public function getScheduledDropoffTime(): ?string
    {
        return $this->scheduled_dropoff_time;
    }

    public function getParcels(): array
    {
        return $this->parcels;
    }

    public function getCash(): ?array
    {
        return $this->cash;
    }
}
