<?php

namespace App\FirstExample;

class CoffeeMaker
{
    public function createCoffee(): Coffee
    {
        $expresso = new Expresso();

        $sweetExpresso =
            (new SweetExpresso($expresso))
                ->addSugar() // C'est gratuit, on profite
                ->addSugar()
        ;

        echo $sweetExpresso->getCost(); // 2 euros

        $wc1 = (new WhippedCream($sweetExpresso));
        echo $wc1->getCost(); // 2.5 euros

        $wc2 = (new WhippedCream($wc1));
        echo $wc2->getCost(); // 3 euros

        $wc3 = (new WhippedCream($wc2));
        echo $wc3->getCost(); // 3.5 euros

        // TOUS sont des cafés !

        return $wc3;
    }
}
