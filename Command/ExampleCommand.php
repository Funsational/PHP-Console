<?php

/**
 * This file is part of the PHP Console package.
 *
 * (c) Funsational <support@funsational.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Simple example command to demonstrate how to setup commands.
 * Each command must end with "Command"
 *
 * @author Michael Williams <michael@funsational.com>
 */
class ExampleCommand extends Command 
{
    public function configure()
    {
        $this->setName('example:example')
            ->setDescription('This is just a simple example command. Use the --help option to see details about the arguments')
            ->addArgument('name', InputArgument::REQUIRED, 'Name to print out. Note that if you use a space you need to wrap string in quotes, "')
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($input->getArgument('name'));
    }
}
