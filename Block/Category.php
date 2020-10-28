<?php
/**
 * GoogleTagManager2 plugin for Magento
 *
 * @package     Yireo_GoogleTagManager2
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2017 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

namespace Yireo\GoogleTagManager2\Block;

use Magento\Catalog\Block\Product\ListProduct;
use Magento\Framework\Data\Collection;
use Magento\Framework\Exception\LocalizedException;
use Yireo\GoogleTagManager2\ViewModel\Category as CategoryViewModel;

/**
 * Class \Yireo\GoogleTagManager2\Block\Category
 */
class Category extends Generic
{
    /**
     * @var string
     */
    protected $_template = 'category.phtml';

    /**
     * @return CategoryViewModel
     */
    public function getViewModel()
    {
        return $this->getData('view_model');
    }

    /**
     * @return Collection
     * @throws LocalizedException
     */
    public function getLoadedProductCollection()
    {
        /** @var ListProduct $productListBlock */
        $productListBlock = $this->layout->getBlock('category.products.list');
        $productListBlock->toHtml();
        return $productListBlock->getLoadedProductCollection();
    }
}
