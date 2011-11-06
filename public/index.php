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
require_once __DIR__.'/../app/autoload.php';

// Require kernel.
require_once __DIR__.'/../app/SyliusKernel.php';

// Initialize kernel and run the application.
$kernel = new SyliusKernel('production', false);
$kernel->handle(Request::createFromGlobals())->send();
