<?php
namespace Nicholascus\Codeception\Extensions;

use Codeception\Command\Run;
use Codeception\Configuration;
use Codeception\CustomCommandInterface;

class StepRun extends Run implements CustomCommandInterface {
    protected function getGlobalConfig($conf = null) {
        parent::getGlobalConfig($conf);
        return Configuration::append(['extensions' => ['enabled' => ['Nicholascus\Codeception\Extensions\Stepler']]]);
    }
    
    public static function getCommandName() {
        return 'steprun';
    }
}