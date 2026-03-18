<?php
/**
 * Description of TotalMinutes.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class TotalMinutes extends DTO
{
    protected int $min;

    protected int $mean;

    protected int $max;

    public function getMin(): int
    {
        return $this->min;
    }

    public function getMean(): int
    {
        return $this->mean;
    }

    public function getMax(): int
    {
        return $this->max;
    }
}
