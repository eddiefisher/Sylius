<?php

/*
 * This file is part of the Sylius sandbox application.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;

/**
 * Installer setup controller.
 * 
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class SetupController extends ContainerAware
{
    /**
     * Displays setup.
     */
    public function indexAction()
    {
        $installed = $this->container->getParameter('sylius.installed');
        
        return $this->container->get('templating')->renderResponse('SyliusCoreBundle:Setup:index.html.twig', array(
            'installed' => $installed
        ));
    }
}
