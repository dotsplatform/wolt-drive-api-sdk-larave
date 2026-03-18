<?php
/**
 * Description of WoltDriveAuthDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\DTO;

use Dots\Data\DTO;

class WoltDriveAuthDTO extends DTO
{
    protected string $merchantKey;

    protected string $merchantId;

    protected string $venueId;

    protected ?string $webhookSecret;

    public static function make(
        string $merchantKey,
        string $merchantId,
        string $venueId,
        ?string $webhookSecret = null,
    ): self {
        return self::fromArray([
            'merchantKey' => $merchantKey,
            'merchantId' => $merchantId,
            'venueId' => $venueId,
            'webhookSecret' => $webhookSecret,
        ]);
    }

    public function getMerchantKey(): string
    {
        return $this->merchantKey;
    }

    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    public function getVenueId(): string
    {
        return $this->venueId;
    }

    public function getWebhookSecret(): ?string
    {
        return $this->webhookSecret;
    }
}
