<?php
/**
 * Description of ExponentialRetryBackoff.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources\Webhook;

use Dots\Data\DTO;

class ExponentialRetryBackoff extends DTO
{
    protected int $exponent_base;

    protected int $max_retry_count;

    public function getExponentBase(): int
    {
        return $this->exponent_base;
    }

    public function getMaxRetryCount(): int
    {
        return $this->max_retry_count;
    }
}
