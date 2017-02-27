<?php

namespace Librairies\LibrairiesTesBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class AppCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('app')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argument = $input->getArgument('argument');

        $result  = $this->getContainer()->get('librairies_test.example') ; 
        print_r($result) ; 
        
        $output->writeln('Command result.');
    }

}
