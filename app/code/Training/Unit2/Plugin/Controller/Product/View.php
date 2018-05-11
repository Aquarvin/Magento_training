<?php

namespace Training\Unit2\Plugin\Controller\Product;

class View
{
    public function beforeExecute(\Magento\Catalog\Controller\Product\View $controller)
    {
        echo "BEFORE<BR>";
        return $controller;
    }

    public function afterExecute(
        \Magento\Catalog\Controller\Product\View $controller,
        $result
    ) {
        echo "AFTER";
        return $result;
    }
}