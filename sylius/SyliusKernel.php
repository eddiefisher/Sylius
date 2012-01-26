<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius;

use Symfony\Component\ClassLoader\DebugUniversalClassLoader;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Debug\ErrorHandler;
use Symfony\Component\HttpKernel\Debug\ExceptionHandler;
use Symfony\Component\HttpKernel\Kernel;


/**
 * Sylius kernel.
 * Powered by Symfony2.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class SyliusKernel extends Kernel
{
    /**
     * Register bundles in kernel.
     */
    public function registerBundles()
    {
        $bundles = array(

            /*
             * Third party bundles.
             */
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Symfony\Bundle\TwigBundle\TwigBundle(),
            new \Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new \Symfony\Bundle\MonologBundle\MonologBundle(),
            new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new \WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),

            /*
             * Sylius bundles.
             */
            new \Sylius\Bundle\CoreBundle\SyliusCoreBundle(),
            new \Sylius\Bundle\CatalogBundle\SyliusCatalogBundle(),
            new \Sylius\Bundle\AssortmentBundle\SyliusAssortmentBundle(),
            new \Sylius\Bundle\CartBundle\SyliusCartBundle(),
            new \Sylius\Bundle\ThemingBundle\SyliusThemingBundle(),
            new \Sylius\Bundle\SalesBundle\SyliusSalesBundle(),
            new \Sylius\Bundle\InstallerBundle\SyliusInstallerBundle(),
            new \Sylius\Bundle\CheckoutsBundle\SyliusCheckoutsBundle(),
            new \Sylius\Bundle\PricingBundle\SyliusPricingBundle()

        );

        $bundles[] = new \Sylius\Bundle\PluginsBundle\SyliusPluginsBundle($this, $bundles);

        if ($this->isDebug()) {
            $bundles[] = new \Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }

    /**
     * Init kernel.
     */
    public function init()
    {
        if ($this->isDebug()) {
            ini_set('display_errors', 1);
            error_reporting(-1);

            DebugUniversalClassLoader::enable();
            ErrorHandler::register();
            if ('cli' !== php_sapi_name()) {
                ExceptionHandler::register();
            }
        } else {
            ini_set('display_errors', 0);
        }
    }

    /**
     * Register root dir.
     */
    public function registerRootDir()
    {
        return __DIR__;
    }

    /**
     * Register dependency injection container configuration.
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/container/'.$this->getEnvironment().'.yml');
    }
}
