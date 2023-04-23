<?php

namespace Composite;

/**
 * Class MenuComponent
 */
abstract class MenuComponent
{
    public function add($menuComponent)
    {
        throw new \Exception();
    }

    public function remove($menuComponent)
    {
        throw new \Exception();
    }

    public function getChild($i)
    {
        throw new \Exception();
    }

    public function getName()
    {
        throw new \Exception();
    }

    public function getDescription()
    {
        throw new \Exception();
    }

    public function getPrice()
    {
        throw new \Exception();
    }

    public function isVegetarian()
    {
        throw new \Exception();
    }

    public abstract function createIterator();

    public function printme()
    {
        throw new \Exception();
    }
}
