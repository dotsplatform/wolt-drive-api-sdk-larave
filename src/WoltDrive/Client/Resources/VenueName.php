<?php
/**
 * Description of VenueName.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class VenueName extends DTO
{
    protected string $lang;

    protected string $value;

    public function getLang(): string
    {
        return $this->lang;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
