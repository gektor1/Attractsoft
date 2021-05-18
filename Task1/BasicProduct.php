<?php

namespace Attractsoft\Task1;

class BasicProduct implements BasicProductInterface
{
    private $productName;

    /**
     * {@inheritdoc}
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * {@inheritdoc}
     */
    public function setProductName(string $name): BasicProductInterface
    {
        $this->productName = $name;

        return $this;
    }
}
