<?php

namespace Attractsoft\Task3;

class ProductsDataset
{
    /**
     * 
     * @var Product
     */
    protected $products = [];

    /**
     * 
     * @param Product $product
     * @return self
     */
    public function addProduct(Product $product) : self
    {
        $this->products[$product->getSku()] = $product;
        return $this;
    }

    /**
     * 
     * @param int $sku
     * @param int $value
     * @return self
     */
    public function setProductStockValue(int $sku, int $value) : self
    {
        if (!array_key_exists($sku, $this->products)) {
            return $this;
        }
        $this->products[$sku]->setStock($value);
        return $this;
    }
}
