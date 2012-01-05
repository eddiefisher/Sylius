<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;

/**
 * Sylius administration dashboard controller.
 * 
 * @author Paweł Jędrzejewski <pjedrzejewski@sylius.pl>
 */
class BackendController extends ContainerAware
{
    /**
     * Displays administration dashboard main panel.
     */
    public function indexAction()
    {
        return $this->container->get('templating')->renderResponse('SyliusCoreBundle:Backend:index.html.' . $this->getEngine());
    }
    
    /**
     * Returns templating engine name.
     * 
     * @return string
     */
    protected function getEngine()
    {
        return $this->container->getParameter('sylius_core.engine');
    }
}
