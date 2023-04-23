<?php


class DinerMenu implements Menu
{
    const MAX_ITEMS = 6;
    protected $numberOfItems = 0;
    protected $menuItems;

    public function __construct()
    {
        $this->menuItems = array();

        $this->addItem(
            "Vegetarian BLT",
            "(Fakin') Bacon with lettuce & tomato on whole wheat",
            true,
            2.99
        );
        $this->addItem(
            "BLT",
            "Bacon with lettuce & tomato on whole wheat",
            false,
            2.99
        );
        $this->addItem(
            "Soup of the day",
            "Soup of the day, with a side of potato salad",
            false,
            3.29
        );
        $this->addItem(
            "Hotdog",
            "A hot dog, with saurkraut, relish, onions, topped with cheese",
            false,
            3.05
        );
        $this->addItem(
            "Steamed Veggies and Brown Rice",
            "A medly of steamed vegetables over brown rice",
            true,
            3.99
        );
        $this->addItem(
            "Pasta",
            "Spaghetti with Marinara Sauce, and a slice of sourdough bread",
            true,
            3.89
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

        if ($this->numberOfItems >= self::MAX_ITEMS) {
            echo "Sorry, menu is full!  Can't add item to menu\n";
        } else {
            $this->menuItems[$this->numberOfItems] = $menuItem;
            $this->numberOfItems++;
        }
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
