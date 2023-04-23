<?php

namespace Entwurfsmuster\State\States;

use Entwurfsmuster\State\GumballMachine;
use Entwurfsmuster\State\State;

/**
 * Class SoldState
 * @package Entwurfsmuster\State\States
 */
class SoldState implements State
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
        echo "Please wait, we're already giving you a gumball\n";
    }

    public function ejectQuarter()
    {
        echo "Sorry, you already turned the crank\n";
    }

    public function turnCrank()
    {
        echo "Turning twice doesn't get you another gumball!\n";
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo "Oops, out of gumballs!\n";
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }

    public function refill()
    {
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "dispensing a gumball\n";
    }
}
