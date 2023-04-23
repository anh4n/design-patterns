<?php

/**
 * Class MenuItem
 */
class MenuItem
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
}
