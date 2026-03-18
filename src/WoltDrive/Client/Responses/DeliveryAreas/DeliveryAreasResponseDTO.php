<?php
/**
 * Description of DeliveryAreasResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Responses\DeliveryAreas;

use Dots\WoltDrive\Client\Responses\WoltDriveResponseDTO;

class DeliveryAreasResponseDTO extends WoltDriveResponseDTO
{
    protected array $delivery_areas = [];

    public function getDeliveryAreas(): array
    {
        return $this->delivery_areas;
    }
}
