<?php

namespace Training\Unit3\Block;

class Template extends \Magento\Framework\View\Element\Template
{
    protected function _toHtml()
    {
        return "<b>Hello world from block!</b>";
    }
}