<?php

namespace Entwurfsmuster\State\States;

use Entwurfsmuster\State\GumballMachine;
use Entwurfsmuster\State\State;

/**
 * Class NoQuarterState
 * @package Entwurfsmuster\State\States
 */
class NoQuarterState implements State
{
    /**
     * @var GumballMachine
     */
    protected $gumballMachine;

    /**
     * @param GumballMachine $gumballMachine
     */
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "You inserted a quarter\n";
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter()
    {
        echo "You haven't inserted a quarter\n";
    }

    public function turnCrank()
    {
        echo "You turned, but there's no quarter\n";
    }

    public function dispense()
    {
        echo "You need to pay first\n";
    }

    public function refill()
    {
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "waiting for quarter\n";
    }
}
