<?php
/**
 * Description of Tip.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class Tip extends DTO
{
    protected string $type;

    protected Price $price;

    public function getType(): string
    {
        return $this->type;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }
}
