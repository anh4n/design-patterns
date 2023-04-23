<?php

/**
 * Class Pizzeria
 * Factory Method
 */
abstract class Pizzeria
{
    /**
     * @param string $element
     * @return Pizza
     */
    protected abstract function erstellePizza($element);

    /**
     * @param string $typ
     * @return Pizza
     */
    public function bestellePizza($typ)
    {
        $pizza = $this->erstellePizza($typ);
        $pizza->vorbereiten();
        $pizza->backen();
        $pizza->schneiden();
        $pizza->verpacken();

        return $pizza;
    }

}
