<?php

/**
 * Class BerlinerPizzeria
 * Factory Method
 */
class BerlinerPizzeria extends Pizzeria
{
    protected function erstellePizza($item)
    {
        $pizza = null;
        $zutatenFabrik = new BerlinerPizzaZutatenFabrik();

        if ($item === "Salami") {
            $pizza = new SalamiPizza($zutatenFabrik);
            $pizza->setName("Salami-Pizza Berliner Art");

        } elseif ($item === "Vegetarisch") {
            $pizza = new VegetarischePizza($zutatenFabrik);
            $pizza->setName("Vegetarische Pizza Berliner Art");

        } elseif ($item === "Krabben") {
            $pizza = new KrabbenPizza($zutatenFabrik);
            $pizza->setName("Krabben-Pizza Berliner Art");

        } elseif ($item === "Thunfisch") {
            $pizza = new ThunfischPizza($zutatenFabrik);
            $pizza->setName("ThunfischPizza Berliner Art");

        }

        return $pizza;
    }
}
