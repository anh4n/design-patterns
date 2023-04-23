<?php

namespace Composite;

class MenuItem extends MenuComponent
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var boolean
     */
    protected $vegetarian;
    /**
     * @var float
     */
    protected $price;

    /**
     * @param string $name
     * @param string $description
     * @param boolean $vegetarian
     * @param float $price
     */
    public function __construct($name, $description, $vegetarian, $price)
    {
        $this->description = $description;
        $this->name = $name;
        $this->price = $price;
        $this->vegetarian = $vegetarian;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return boolean
     */
    public function isVegetarian()
    {
        return $this->vegetarian;
    }

    public function createIterator()
    {
        return new NullIterator();
    }

    public function printme()
    {
        echo "  " . $this->getName();
		if ($this->isVegetarian()) {
            echo "(v)";
        }
		echo ", " . $this->getPrice() . "\n";
		echo "     -- " . $this->getDescription() . "\n";
	}
}
