<?php
/**
 * Description of CallbackConfig.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources\Webhook;

use Dots\Data\DTO;

class CallbackConfig extends DTO
{
    protected ExponentialRetryBackoff $exponential_retry_backoff;

    public function getExponentialRetryBackoff(): ExponentialRetryBackoff
    {
        return $this->exponential_retry_backoff;
    }
}
