<?php
/**
 * Description of PickupOptions.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class PickupOptions extends DTO
{
    protected ?int $min_preparation_time_minutes;

    public function getMinPreparationTimeMinutes(): ?int
    {
        return $this->min_preparation_time_minutes;
    }
}
