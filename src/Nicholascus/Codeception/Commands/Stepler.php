<?php
namespace Nicholascus\Codeception\Commands;

use Codeception\Command\Run;
use Codeception\Configuration;
use Codeception\CustomCommandInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Stepler extends Run implements CustomCommandInterface {
    protected function getGlobalConfig($conf = null) {
        parent::getGlobalConfig($conf);
        return Configuration::append(['extensions' => ['enabled' => ['Nicholascus\Codeception\Extensions\Stepler']]]);
    }

    public static function getCommandName() {
        return 'stepler';
    }

    public function execute(InputInterface $input, OutputInterface $output) {
        $input->setOption('debug', 'true');
        parent::execute($input, $output);
    }
}