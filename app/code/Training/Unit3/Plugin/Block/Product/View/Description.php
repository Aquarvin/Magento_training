<?php

namespace  Training\Unit3\Plugin\Block\Product\View;

class Description
{
    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $originalBlock)
    {
        $originalBlock->setTemplate('Training_Unit3::description.phtml');
    }
}