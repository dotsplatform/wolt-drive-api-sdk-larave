<?php
/**
 * Description of ParcelTag.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources\Consts;

enum ParcelTag: string
{
    case ALCOHOL = 'alcohol';
    case MEDICINE = 'medicine';
    case TOBACCO = 'tobacco';
}
