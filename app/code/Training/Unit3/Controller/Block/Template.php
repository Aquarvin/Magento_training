<?php
/**
 * Product controller.
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Training\Unit3\Controller\Block;

class Template extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $block = $this->_view->getLayout()->createBlock('Training\Unit3\Block\Template');
        $block->setTemplate('template.phtml');
        $this->getResponse()->appendBody($block->toHtml());
    }
}