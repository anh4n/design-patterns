<?php

namespace Composite;

class CompositeIterator
{
    protected $stack;

    public function __construct($iterator)
    {
        $this->stack = new \SplStack();

        $this->stack->push($iterator);
    }


    public function next()
    {
        if ($this->hasNext()) {
            $iterator = $this->stack->top();
            $component = $iterator->next();
            $this->stack->push($component->createIterator());

            return $component;
        } else {
            return null;
        }
    }

    public function hasNext()
    {
        if ($this->stack->isEmpty()) {
            return false;
        } else {
            $iterator = $this->stack->top();
            if (!$iterator->hasNext()) {
                $this->stack->pop();

                return $this->hasNext();
            } else {
                return true;
            }
        }
    }
}
