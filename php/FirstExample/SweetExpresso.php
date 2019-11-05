<?php

namespace App\FirstExample;

class SweetExpresso implements Coffee
{
    /**
     * @var Coffee $coffee
     */
    private $coffee;

    /**
     * @var iterable
     */
    private $sugars;

    public function __construct(Coffee $coffee)
    {
        $this->coffee;
        $this->sugars[] = new Sugar();
    }

    public function addSugar(): self
    {
        $this->sugars[] = new Sugar();

        return $this;
    }

    public function getCost(): int
    {
        return $this->coffee->getCost();
    }
}
