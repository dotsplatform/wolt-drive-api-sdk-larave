<?php
/**
 * Description of DropoffRestrictions.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class DropoffRestrictions extends DTO
{
    protected ?bool $id_check_required;

    public function isIdCheckRequired(): ?bool
    {
        return $this->id_check_required;
    }
}
