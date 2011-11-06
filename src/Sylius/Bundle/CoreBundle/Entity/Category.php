<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\Entity;

use Sylius\Bundle\CatalogBundle\Entity\Category as BaseCategory;

/**
 * Default category for assortment catalog.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class Category extends BaseCategory
{
    protected $products;
    
    public function getProducts()
    {
        return $this->products;
    }
    
    public function setProducts($products)
    {
        $this->products = $products;
    }
}
