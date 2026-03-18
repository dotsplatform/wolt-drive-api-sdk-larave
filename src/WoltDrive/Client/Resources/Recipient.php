<?php
/**
 * Description of Recipient.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources;

use Dots\Data\DTO;

class Recipient extends DTO
{
    protected string $name;

    protected string $phone_number;

    protected ?string $email;

    public function getName(): string
    {
        return $this->name;
    }

    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }
}
