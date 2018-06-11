<?php
namespace Nicholascus\Codeception\Extensions;

use Codeception\Events;
use Codeception\Extension;
use Codeception\Util\Debug;

class Stepler extends Extension {
    public static $events = [
        Events::STEP_AFTER => 'pause',
        Events::TEST_FAIL => 'pause'
    ];

    public function pause()
    {
        Debug::pause();
    }
}
