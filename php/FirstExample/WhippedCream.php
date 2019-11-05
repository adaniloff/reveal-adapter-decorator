<?php

namespace App\FirstExample;

class WhippedCream implements Coffee
{
    /**
     * @var Coffee $coffee
     */
    private $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee;
    }

    public function getCost(): int
    {
        return $this->coffee->getCost() + 0.5;
    }
}
