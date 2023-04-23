<?php

namespace Composite;

/**
 * Class Waitress
 * @package Composite
 */
class Waitress
{
    /**
     * @var MenuComponent
     */
    protected $allMenus;

    public function __construct($allMenus)
    {
        $this->allMenus = $allMenus;
    }

    public function printMenu()
    {
        $this->allMenus->printme();
    }

    public function printVegetarianMenu()
    {
        $iterator = $this->allMenus->createIterator();

        echo "\nVEGETARIAN MENU\n----\n";
        while ($iterator->hasNext()) {
            $menuComponent = $iterator->next();
            try {
                if ($menuComponent->isVegetarian()) {
                    $menuComponent->printme();
                }
            } catch (\Exception $e) {
            }
        }
    }
}
