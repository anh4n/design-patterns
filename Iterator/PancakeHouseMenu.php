<?php

/**
 * Class PancakeHouseMenu
 */
class PancakeHouseMenu implements Menu
{
    protected $menuItems;

    public function __construct()
    {
        $this->menuItems = array();

        $this->addItem(
            "K&B's Pancake Breakfast",
            "Pancakes with scrambled eggs, and toast",
            true,
            2.99
        );

        $this->addItem(
            "Regular Pancake Breakfast",
            "Pancakes with fried eggs, sausage",
            false,
            2.99
        );

        $this->addItem(
            "Blueberry Pancakes",
            "Pancakes made with fresh blueberries, and blueberry syrup",
            true,
            3.49
        );

        $this->addItem(
            "Waffles",
            "Waffles, with your choice of blueberries or strawberries",
            true,
            3.59
        );
    }

    /**
     * @param string $name
     * @param string $description
     * @param bool $vegetarian
     * @param double $price
     */
    public function addItem($name, $description, $vegetarian, $price)
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems[] = $menuItem;
    }

    /**
     * @return mixed
     */
    public function getMenuItems()
    {
        return $this->menuItems;
    }

    public function createIterator()
    {
        return new MenuIterator($this->menuItems);
    }
}
