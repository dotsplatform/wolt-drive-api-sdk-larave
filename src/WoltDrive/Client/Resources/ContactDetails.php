<?php
/**
 * Description of ContactDetails.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class ContactDetails extends DTO
{
    protected ?string $name;

    protected ?string $phone_number;

    protected ?bool $send_tracking_link_sms;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function getSendTrackingLinkSms(): ?bool
    {
        return $this->send_tracking_link_sms;
    }
}
