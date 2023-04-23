<?php

namespace Entwurfsmuster\State\States;

use Entwurfsmuster\State\GumballMachine;
use Entwurfsmuster\State\State;

/**
 * Class HasQuarterState
 * @package Entwurfsmuster\State\States
 */
class HasQuarterState implements State
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
        echo "You can't insert another quarter\n";
    }

    public function ejectQuarter()
    {
        echo "Quarter returned\n";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank()
    {
        echo "You turned...\n";
        $winner = rand(0, 10);
		if (($winner === 0) && ($this->gumballMachine->getCount() > 1)) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense()
    {
        echo "No gumball dispensed\n";
    }

    public function refill()
    {
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "waiting for turn of crank\n";
    }
}
