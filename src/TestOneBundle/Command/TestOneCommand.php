<?php

namespace App\TestOneBundle\Command;

use App\TestOneBundle\Classes\Connectors\ConnectorCart;
use App\TestOneBundle\Classes\Connectors\ConnectorCustomer;
use App\TestOneBundle\Classes\Connectors\ConnectorProduct;
use App\TestOneBundle\Classes\Managers\ManagerCart;
use App\TestOneBundle\Classes\Managers\ManagerCustomer;
use App\TestOneBundle\Classes\Managers\ManagerProduct;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestOneCommand extends Command {
    /**
     * {@inheritDoc}
     */
    protected function configure() {
        $this->setName('test:command:one');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
		(new ConnectorProduct())->sendData('http://example.com/product', (new ManagerProduct())->findAll());
		(new ConnectorCustomer())->sendData('http://example.com/customer', (new ManagerCustomer())->findAll());
		(new ConnectorCart())->sendData('http://example.com/cart', (new ManagerCart())->findAll());
    }

}