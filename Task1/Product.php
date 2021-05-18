<?php

namespace Attractsoft\Task1;

class Product extends BasicProduct
{
    /**
     * Get product name with title/prefix
     *
     * @param  string $prefix
     * @return string
     */
    public function getProductNameTitle(string $prefix = 'Title '): string
    {
        return $prefix . $this->getProductName();
    }
}
