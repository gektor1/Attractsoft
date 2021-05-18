<?php

namespace Attractsoft\Task1;

/**
 * Describes a basic product instance.
 */
interface BasicProductInterface
{
    /**
     *
     * @return string Product name as string
     */
    public function getProductName() : string;

    /**
     *
     * @param  string $name Product name as string
     * @return self
     */
    public function setProductName(string $name) : BasicProductInterface;
}
