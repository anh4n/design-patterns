<?php

spl_autoload_register();

$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu = new DinerMenu();
$cafeMenu = new CafeMenu();

$waitress = new Waitress($pancakeHouseMenu, $dinerMenu, $cafeMenu);

$waitress->printMenu();
$waitress->printVegetarianMenu();

echo "\nCustomer asks, is the Hotdog vegetarian?\n";
echo "Waitress says: ";
if ($waitress->isItemVegetarian("Hotdog")) {
    echo "Yes\n";
} else {
    echo "No\n";
}
echo "\nCustomer asks, are the Waffles vegetarian?\n";
echo "Waitress says: ";
if ($waitress->isItemVegetarian("Waffles")) {
    echo "Yes\n";
} else {
    echo "No\n";
}
