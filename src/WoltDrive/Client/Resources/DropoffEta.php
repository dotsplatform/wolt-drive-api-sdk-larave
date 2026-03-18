<?php
/**
 * Description of DropoffEta.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class DropoffEta extends DTO
{
    protected ?string $min;

    protected ?string $max;

    public function getMin(): ?string
    {
        return $this->min;
    }

    public function getMax(): ?string
    {
        return $this->max;
    }
}
