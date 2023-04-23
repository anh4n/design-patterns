<?php

/**
 * Class Tea
 */
class Tea extends CaffeineBeverage
{
    public function brew()
    {
        echo "Steeping the tea\n";
    }

    public function addCondiments()
    {
        echo "Adding Lemon\n";
    }
}
