<?php

namespace Composite;

/**
 * Class Menu
 */
class Menu extends MenuComponent
{
    protected $iterator = null;
    protected $menuComponents;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;

    /**
     * @param string $name
     * @param string $description
     */
    function __construct($name, $description)
    {
        $this->menuComponents = new ArrayList();
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * @param MenuComponent $menuComponent
     */
    public function add(MenuComponent $menuComponent)
    {
        $this->menuComponents->add($menuComponent);
    }

    /**
     * @param MenuComponent $menuComponent
     */
    public function remove(MenuComponent $menuComponent)
    {
        $this->menuComponents->remove($menuComponent);
    }

    /**
     * @param int $i
     */
    public function getChild($i)
    {
        return $this->menuComponents->get($i);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function createIterator()
    {
        if ($this->iterator == null) {
            $this->iterator = new CompositeIterator($this->menuComponents->iterator());
        }

        return $this->iterator;
    }

    public function printme()
    {
        echo "\n" . $this->getName();
        echo ", " . $this->getDescription() . "\n";
        echo "---------------------\n";

        $this->iterator = $this->menuComponents->iterator();
        while ($this->iterator->hasNext()) {
            $menuComponent = $this->iterator->next();
            $menuComponent->printme();
        }
    }
}
