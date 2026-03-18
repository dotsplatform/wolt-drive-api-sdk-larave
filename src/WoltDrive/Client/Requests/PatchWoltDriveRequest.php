<?php
/**
 * Description of PatchWoltDriveRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

abstract class PatchWoltDriveRequest extends BaseWoltDriveRequest implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;
}
