<?php
/**
 * Description of GetDeliveryFeeDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\DeliveryFee\DTO;

use Dots\Data\DTO;

class GetDeliveryFeeDTO extends DTO
{
    protected array $pickup;

    protected array $dropoff;

    protected ?string $scheduled_dropoff_time;

    protected array $contents = [];

    protected ?array $cash;

    public function getPickup(): array
    {
        return $this->pickup;
    }

    public function getDropoff(): array
    {
        return $this->dropoff;
    }

    public function getScheduledDropoffTime(): ?string
    {
        return $this->scheduled_dropoff_time;
    }

    public function getContents(): array
    {
        return $this->contents;
    }

    public function getCash(): ?array
    {
        return $this->cash;
    }
}
