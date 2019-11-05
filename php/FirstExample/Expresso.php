<?php

namespace App\FirstExample;

class Expresso implements Coffee
{
    public function getCost(): int
    {
        return 2; // 2 euros
    }
}