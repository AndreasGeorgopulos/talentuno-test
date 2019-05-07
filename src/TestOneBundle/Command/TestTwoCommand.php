<?php

namespace App\TestOneBundle\Command;

use App\TestOneBundle\Classes\Connectors\ConnectorFinance;
use App\TestOneBundle\Classes\Connectors\ConnectorSales;
use App\TestOneBundle\Classes\Managers\ManagerFinance;
use App\TestOneBundle\Classes\Managers\ManagerSales;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestTwoCommand extends Command {
    /**
     * {@inheritDoc}
     */
    protected function configure() {
        $this->setName('test:command:two');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
    }

}