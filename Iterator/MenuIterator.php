<?php

/**
 * Class MenuIterator
 */
class MenuIterator
{
    /**
     * @var int
     */
    protected $position = 0;
    /**
     * @var array
     */
    protected $list;

    /**
     * @param array $list
     */
    public function __construct(array $list)
    {
        $this->list = $list;
    }

    /**
     * @return MenuItem
     */
    public function next()
    {
        $menuItem = $this->list[$this->position];
        $this->position++;

        return $menuItem;
    }

    /**
     * @return bool
     */
    public function hasNext()
    {
        if ($this->position >= count($this->list) || $this->list[$this->position] == null) {
            return false;
        } else {
            return true;
        }
    }

    public function remove()
    {
        if ($this->position <= 0) {
            throw new Exception("You can't remove an item until you've done at least one next()");
        }
        if ($this->list[$this->position - 1] !== null) {
            for ($i = $this->position - 1; $i < (count($this->list) - 1); $i++) {
                $this->list[$i] = $this->list[$i + 1];
            }
            $this->list[count($this->list) - 1] = null;
        }
    }
}
