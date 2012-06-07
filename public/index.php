<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\HttpFoundation\Request;

/*
 * Sylius front controller.
 * Production environment.
 */

// Require autoload.
require_once __DIR__.'/../sylius/autoload.php';

// Require kernel.
require_once __DIR__.'/../sylius/SyliusKernel.php';

// Initialize kernel and run the application.
$kernel = new \Sylius\SyliusKernel('live', false);
$kernel->handle(Request::createFromGlobals())->send();
