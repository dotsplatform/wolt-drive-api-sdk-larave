<?php
/**
 * Description of HandshakeDelivery.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class HandshakeDelivery extends DTO
{
    protected bool $is_required;

    protected bool $should_send_sms_to_dropoff_contact = true;

    public function isRequired(): bool
    {
        return $this->is_required;
    }

    public function shouldSendSmsToDropoffContact(): bool
    {
        return $this->should_send_sms_to_dropoff_contact;
    }
}
