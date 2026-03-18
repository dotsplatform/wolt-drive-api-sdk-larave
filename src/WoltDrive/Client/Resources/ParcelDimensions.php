<?php
/**
 * Description of ParcelDimensions.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class ParcelDimensions extends DTO
{
    protected ?float $weight_gram;

    protected ?float $width_cm;

    protected ?float $height_cm;

    protected ?float $depth_cm;

    public function getWeightGram(): ?float
    {
        return $this->weight_gram;
    }

    public function getWidthCm(): ?float
    {
        return $this->width_cm;
    }

    public function getHeightCm(): ?float
    {
        return $this->height_cm;
    }

    public function getDepthCm(): ?float
    {
        return $this->depth_cm;
    }
}
