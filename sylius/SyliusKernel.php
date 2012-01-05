<?php

/*
 * This file is part of the Sylius sandbox application.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius;

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

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
        if ('installer' == $this->getEnvironment()) {
            $bundles = array(
                new \Sylius\Bundle\CoreBundle\SyliusCoreBundle(),
                new \Sylius\Bundle\InstallerBundle\SyliusInstallerBundle(),
                
                /*
                 * Third party bundles.
                 */
                new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
                new \Symfony\Bundle\TwigBundle\TwigBundle(),
                new \Symfony\Bundle\SecurityBundle\SecurityBundle(),
                new \Symfony\Bundle\MonologBundle\MonologBundle(),
                new \Symfony\Bundle\DoctrineBundle\DoctrineBundle(),
            );
        } else {
            $bundles = array(
                /*
                 * Third party bundles.
                 */
                new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
                new \Symfony\Bundle\TwigBundle\TwigBundle(),
                new \Symfony\Bundle\SecurityBundle\SecurityBundle(),
                new \Symfony\Bundle\MonologBundle\MonologBundle(),
                new \Symfony\Bundle\DoctrineBundle\DoctrineBundle(),
                new \Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
                new \WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
                new \Liip\ThemeBundle\LiipThemeBundle(),
                       
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
            );
            
        $bundles[] = new \Sylius\Bundle\PluginsBundle\SyliusPluginsBundle($this, $bundles);
        }
        
        if ($this->isDebug()) {
            $bundles[] = new \Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        }
        
        return $bundles;
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
