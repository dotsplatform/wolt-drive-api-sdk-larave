<?php
/**
 * Description of DropoffOptions.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class DropoffOptions extends DTO
{
    protected ?bool $is_no_contact;

    protected ?string $scheduled_time;

    public function isNoContact(): ?bool
    {
        return $this->is_no_contact;
    }

    public function getScheduledTime(): ?string
    {
        return $this->scheduled_time;
    }
}
