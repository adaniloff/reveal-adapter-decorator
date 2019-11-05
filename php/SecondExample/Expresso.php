<?php

namespace App\SecondExample;

class Expresso implements Coffee
{
    public function getCost(): int
    {
        return 2;
    }
}