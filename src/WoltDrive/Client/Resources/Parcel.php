<?php
/**
 * Description of Parcel.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class Parcel extends DTO
{
    protected int $count = 1;

    protected ?ParcelDimensions $dimensions;

    protected ?Price $price;

    protected ?string $description;

    protected ?string $identifier;

    protected ?DropoffRestrictions $dropoff_restrictions;

    protected array $tags = [];

    public function getCount(): int
    {
        return $this->count;
    }

    public function getDimensions(): ?ParcelDimensions
    {
        return $this->dimensions;
    }

    public function getPrice(): ?Price
    {
        return $this->price;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function getDropoffRestrictions(): ?DropoffRestrictions
    {
        return $this->dropoff_restrictions;
    }

    public function getTags(): array
    {
        return $this->tags;
    }
}
