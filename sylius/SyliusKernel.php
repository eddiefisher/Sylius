<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
    // Sylius version.
    const VERSION = '0.0.1';
    
    /**
     * Register bundles in kernel.
     */
    public function registerBundles()
    {
        $bundles = array(
            
            /*
             * Third party bundles.
             */
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\DoctrineBundle\DoctrineBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
            new Liip\ThemeBundle\LiipThemeBundle(),
            //new FOS\RestBundle\FOSRestBundle(),
            //new FOS\UserBundle\FOSUserBundle(),
            //new FOS\CommentBundle\FOSCommentBundle(),
                   
            /*
             * Sylius bundles.
             */
            new Sylius\Bundle\CoreBundle\SyliusCoreBundle(),
            new Sylius\Bundle\CatalogBundle\SyliusCatalogBundle(),
            new Sylius\Bundle\AssortmentBundle\SyliusAssortmentBundle(),
            new Sylius\Bundle\NewsletterBundle\SyliusNewsletterBundle(),
            new Sylius\Bundle\CartBundle\SyliusCartBundle(),
            new Sylius\Bundle\ThemingBundle\SyliusThemingBundle(),
            new Sylius\Bundle\InstallerBundle\SyliusInstallerBundle(),
            new Sylius\Bundle\SalesBundle\SyliusSalesBundle(),
            //new Sylius\Bundle\AddressingBundle\SyliusAddressingBundle(),
            //new Sylius\Bundle\CheckoutBundle\SyliusCheckoutBundle(),
            //new Sylius\Bundle\PluginsBundle\SyliusPluginsBundle(),
            //new Sylius\Bundle\PricingBundle\SyliusPricingBundle(),
            //new Sylius\Bundle\UpdaterBundle\SyliusUpdaterBundle(),
            //new Sylius\Bundle\ContactBundle\SyliusContactBundle(),
        );

        if ($this->isDebug()) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        }
        
        if ('installation' == $this->getEnvironment()) {
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
