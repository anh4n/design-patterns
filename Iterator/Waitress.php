<?php

/**
 * Class Waitress
 */
class Waitress
{
    protected $pancakeHouseMenu;
    protected $dinerMenu;
    protected $cafeMenu;

    public function __construct(Menu $cafeMenu, Menu $dinerMenu, Menu $pancakeHouseMenu)
    {
        $this->cafeMenu = $cafeMenu;
        $this->dinerMenu = $dinerMenu;
        $this->pancakeHouseMenu = $pancakeHouseMenu;
    }

    public function printMenu()
    {
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();
        $dinerIterator = $this->dinerMenu->createIterator();
        $cafeIterator = $this->cafeMenu->createIterator();

        echo "MENU\n----\nBREAKFAST\n";
        $this->printMenuDetail($pancakeIterator);
        echo "\nLUNCH\n";
        $this->printMenuDetail($dinerIterator);
        echo "\nDINNER\n";
        $this->printMenuDetail($cafeIterator);
    }

    private function printMenuDetail($iterator)
    {
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();
            echo $menuItem->getName() . ", ";
            echo $menuItem->getPrice() . " -- ";
            echo $menuItem->getDescription() . "\n";
        }
    }

    public function printVegetarianMenu()
    {
        echo "\nVEGETARIAN MENU\n---------------\n";
        $this->printVegetarianMenuDetail($this->pancakeHouseMenu->createIterator());
        $this->printVegetarianMenuDetail($this->dinerMenu->createIterator());
        $this->printVegetarianMenuDetail($this->cafeMenu->createIterator());
    }

    private function printVegetarianMenuDetail($iterator)
    {
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();
            if ($menuItem->isVegetarian()) {
                echo $menuItem->getName() . ", ";
                echo $menuItem->getPrice() . " -- ";
                echo $menuItem->getDescription() . "\n";
            }
        }
    }

    public function isItemVegetarian($name)
    {
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();
        if ($this->isVegetarian($name, $pancakeIterator)) {
            return true;
        }
        $dinerIterator = $this->dinerMenu->createIterator();
        if ($this->isVegetarian($name, $dinerIterator)) {
            return true;
        }
        $cafeIterator = $this->cafeMenu->createIterator();
        if ($this->isVegetarian($name, $cafeIterator)) {
            return true;
        }

        return false;
    }

    private function isVegetarian($name, $iterator)
    {
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();
            if ($menuItem->getName() === $name && $menuItem->isVegetarian()) {
                return true;
            }
        }

        return false;
    }


}
