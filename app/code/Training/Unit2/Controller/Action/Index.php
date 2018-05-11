<?php
/**
 * Product controller.
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Training\Unit2\Controller\Action;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $this->getResponse()->appendBody("HELLO WORLD");
    }
}