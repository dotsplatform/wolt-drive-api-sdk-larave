<?php
/**
 * Description of BaseWoltDriveCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Commands;

use Dots\WoltDrive\Client\WoltDriveConnector;
use Illuminate\Console\Command;

abstract class BaseWoltDriveCommand extends Command
{
    protected function getWoltDriveConnector(): WoltDriveConnector
    {
        return app(WoltDriveConnector::class);
    }
}
