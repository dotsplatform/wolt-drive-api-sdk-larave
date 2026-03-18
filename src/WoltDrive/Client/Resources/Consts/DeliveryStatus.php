<?php
/**
 * Description of DeliveryStatus.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources\Consts;

enum DeliveryStatus: string
{
    case INFO_RECEIVED = 'INFO_RECEIVED';
    case REJECTED = 'REJECTED';
}
