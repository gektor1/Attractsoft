<?php

namespace Attractsoft\Task3;

class Product
{
    /**
     *
     * @var int
     */
    protected $sku;

    /**
     *
     * @var int
     */
    protected $stock;

    /**
     *
     * @param int $sku
     * @param int $stock
     */
    public function __construct(int $sku, int $stock)
    {
        $this->sku = $sku;
        $this->stock = $stock;
    }

    /**
     * 
     * @return int
     */
    public function getSku() : int
    {
        return $this->sku;
    }

    /**
     * 
     * @return int
     */
    public function getStock() : int
    {
        return $this->stock;
    }

    /**
     * 
     * @param int $value
     * @return self
     */
    public function setStock(int $value) : self
    {
        $this->stock = $value;
        return $this;
    }
}
