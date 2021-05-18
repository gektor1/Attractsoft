<?php

namespace Attractsoft\Task2;

class Test1
{
    /**
     *
     * @var array
     */
    protected $params = [];

    /**
     *
     * @param int $param
     * @return self
     */
    public function addValue(int $param): self
    {
        $this->params[] = $param;

        return $this;
    }

    /**
     *
     * @return self
     */
    public function increaseAll(): self
    {
        array_walk($this->params, function (&$v) {
            ++$v;
        });
        return $this;
    }
}
