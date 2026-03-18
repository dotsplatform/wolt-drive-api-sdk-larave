<?php
/**
 * Description of DeleteWoltDriveRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests;

use Saloon\Enums\Method;

abstract class DeleteWoltDriveRequest extends BaseWoltDriveRequest
{
    protected Method $method = Method::DELETE;
}
