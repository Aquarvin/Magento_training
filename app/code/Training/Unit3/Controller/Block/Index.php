<?php
/**
 * Product controller.
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Training\Unit3\Controller\Block;

class Index extends \Magento\Framework\App\Action\Action
{

    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $layout = $resultPage->getLayout();

        $block = $layout->createBlock('Training\Unit3\Block\Test', 'super_custom_block_name');
        $layout->setChild('content', 'super_custom_block_name', '');
        return $resultPage;

    }
}