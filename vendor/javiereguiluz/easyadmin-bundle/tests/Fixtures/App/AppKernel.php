<?php

/*
 * This file is part of the EasyAdminBundle.
 *
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel;

/**
 * The kernel used in the application of most functional tests.
 */
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        return array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new EasyCorp\Bundle\EasyAdminBundle\EasyAdminBundle(),
            new EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AppTestBundle\AppTestBundle(),
        );
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');

        if ($this->isSymfony3()) {
            $loader->load(function (ContainerBuilder $container) {
                $container->loadFromExtension('framework', array(
                    'assets' => null,
                ));
            });
        }

        if ($this->isSymfony23()) {
            $loader->load(function (ContainerBuilder $container) {
                $container->loadFromExtension('framework', array(
                    'templating' => array(
                        'engines' => array('twig'),
                    ),
                ));
            });
        }
    }

    /**
     * @return string
     */
    public function getCacheDir()
    {
        return __DIR__.'/../../../build/cache/'.$this->getEnvironment();
    }

    /**
     * @return string
     */
    public function getLogDir()
    {
        return __DIR__.'/../../../build/kernel_logs/'.$this->getEnvironment();
    }

    protected function isSymfony3()
    {
        return 3 === Kernel::MAJOR_VERSION;
    }

    protected function isSymfony23()
    {
        return 2 === (int) Kernel::MAJOR_VERSION && 3 === (int) Kernel::MINOR_VERSION;
    }
}
