<?php

namespace Entwurfsmuster\State\States;

use Entwurfsmuster\State\GumballMachine;
use Entwurfsmuster\State\State;

/**
 * Class SoldOutState
 * @package State\States
 */
class SoldOutState implements State
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
        echo "You can't insert a quarter, the machine is sold out\n";
    }

    public function ejectQuarter()
    {
        echo "You can't eject, you haven't inserted a quarter yet\n";
    }

    public function turnCrank()
    {
        echo "You turned, but there are no gumballs\n";
    }

    public function dispense()
    {
        echo "No gumball dispensed\n";
    }

    public function refill()
    {
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "sold out\n";
    }
}
