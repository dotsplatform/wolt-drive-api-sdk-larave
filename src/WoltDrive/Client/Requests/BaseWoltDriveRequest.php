<?php
/**
 * Description of BaseWoltDriveRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

abstract class BaseWoltDriveRequest extends Request
{
    protected Method $method = Method::GET;
}
