<?php
namespace Vmasciotta\MageVersion\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Composer\ComposerJsonFinder;
use \Magento\Framework\App\ProductMetadata;

class VersionCommand extends Command
{
    protected function configure()
    {
        $this->setName('info:version')->setDescription('Get current Magento Version');
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $directoryList      = new DirectoryList(BP);
        $composerJsonFinder = new ComposerJsonFinder($directoryList);
        $productMetadata    = new ProductMetadata($composerJsonFinder);
        $output->writeln('<info>'.$productMetadata->getName() .' '.$productMetadata->getEdition() .' '.$productMetadata->getVersion().'</info>');
    }
}