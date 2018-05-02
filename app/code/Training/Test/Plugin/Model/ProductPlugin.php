<?php

namespace Training\Test\Plugin\Model;

class ProductPlugin
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result * 1.1;
    }
}