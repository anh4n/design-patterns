<?php

namespace Entwurfsmuster\State\States;

use Entwurfsmuster\State\GumballMachine;
use Entwurfsmuster\State\State;

/**
 * Class WinnerState
 * @package Entwurfsmuster\State\States
 */
class WinnerState implements State
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
        echo "Please wait, we're already giving you a Gumball\n";
    }

    public function ejectQuarter()
    {
        echo "Please wait, we're already giving you a Gumball\n";
    }

    public function turnCrank()
    {
        echo "Turning again doesn't get you another gumball!\n";
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() == 0) {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->releaseBall();
            echo "YOU'RE A WINNER! You got two gumballs for your quarter\n";
            if ($this->gumballMachine->getCount() > 0) {
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            } else {
                echo "Oops, out of gumballs!\n";
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
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
        return "despensing two gumballs for your quarter, because YOU'RE A WINNER!\n";
    }
}
