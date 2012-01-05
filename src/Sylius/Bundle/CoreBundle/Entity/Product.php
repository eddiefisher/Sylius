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

use Sylius\Bundle\CatalogBundle\Model\CategoryInterface;
use Sylius\Bundle\AssortmentBundle\Entity\Product as BaseProduct;

/**
 * Default product class.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class Product extends BaseProduct
{
    protected $category;
    
    public function getCategory()
    {
        return $this->category;
    }
    
    public function setCategory(CategoryInterface $category)
    {
        $this->category = $category;
    }
}
