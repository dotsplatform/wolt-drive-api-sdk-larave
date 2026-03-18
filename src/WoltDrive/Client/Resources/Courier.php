<?php
/**
 * Description of Courier.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;
use Dots\WoltDrive\Client\Resources\Consts\VehicleType;

class Courier extends DTO
{
    protected ?int $id;

    protected ?VehicleType $vehicle_type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVehicleType(): ?VehicleType
    {
        return $this->vehicle_type;
    }
}
