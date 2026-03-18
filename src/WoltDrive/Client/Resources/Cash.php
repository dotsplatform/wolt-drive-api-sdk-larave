<?php
/**
 * Description of Cash.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class Cash extends DTO
{
    protected ?float $amount_to_collect;

    protected ?float $amount_to_expect;

    public function getAmountToCollect(): ?float
    {
        return $this->amount_to_collect;
    }

    public function getAmountToExpect(): ?float
    {
        return $this->amount_to_expect;
    }
}
