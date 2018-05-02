<?php

namespace Training\Test\Plugin\Block\Html;

class Breadcrumbs
{
    public function aroundAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, callable $proceed, $crumbName, $crumbInfo)
    {
        if(isset($crumbInfo['label']) && is_string($crumbInfo['label']) ) {
            $crumbInfo['label'] .= '(!)';
        }
        $returnValue = $proceed($crumbName, $crumbInfo);
        return $returnValue;
    }
}