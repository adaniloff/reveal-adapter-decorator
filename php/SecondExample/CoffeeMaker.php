<?php

namespace App\SecondExample;

class CoffeeMaker
{
    public function createCoffee(): Coffee
    {
        $expresso = new Expresso();

        $sweetExpresso =
            (new SweetExpresso($expresso))
                ->addSugar()
                ->addSugar()
        ;

        return $expresso;
    }
}