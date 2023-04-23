<?php

namespace Composite;

/**
 * Class NullIterator
 */
class NullIterator
{
    /**
     * @return MenuItem
     */
    public function next()
    {
        return null;
    }

    /**
     * @return bool
     */
    public function hasNext()
    {
            return false;
    }

    public function remove()
    {
        throw new \Exception();
    }
}
