<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\Form\Type;

use Sylius\Bundle\AssortmentBundle\Form\Type\ProductFormType as BaseProductFormType;

use Symfony\Component\Form\FormBuilder;

/**
 * Base product form type.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class ProductFormType extends BaseProductFormType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder
            ->add('category', 'sylius_catalog_category_choice', array(
                'multiple'		=> false,
                'catalog_alias' => 'assortment'
            ))
        ;
    }
}
