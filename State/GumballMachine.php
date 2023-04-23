<?php

namespace Entwurfsmuster\State;

use Entwurfsmuster\State\States\SoldOutState;
use Entwurfsmuster\State\States\NoQuarterState;
use Entwurfsmuster\State\States\HasQuarterState;
use Entwurfsmuster\State\States\SoldState;
use Entwurfsmuster\State\States\WinnerState;
use Entwurfsmuster\State\State;

/**
 * Class GumballMachine
 * @package State
 */
class GumballMachine
{
    protected $soldOutState;
    protected $noQuarterState;
    protected $hasQuarterState;
    protected $soldState;
    protected $winnerState;

    protected $state;
    protected $count = 0;

    /**
     * @param int $numberGumballs
     */
    public function __construct($numberGumballs)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);

        $this->state = $this->soldOutState;

        $this->count = $numberGumballs;
        if ($numberGumballs > 0) {
            $this->state = $this->noQuarterState;
        }
    }

    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function releaseBall()
    {
        echo "A gumball comes rolling out the slot...\n";
        if ($this->count != 0) {
            $this->count--;
        }
    }

    function getCount()
    {
        return $this->count;
    }

    public function refill($count)
    {
        $this->count += $count;
        echo "The gumball machine was just refilled; it's new count is: " . $this->count . "\n";
        $this->state->refill();
    }

    public function getState()
    {
        return $this->state;
    }

    public function getSoldOutState()
    {
        return $this->soldOutState;
    }

    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    public function getSoldState()
    {
        return $this->soldState;
    }

    public function getWinnerState()
    {
        return $this->winnerState;
    }

    public function __toString()
    {
        $out = "";
        $out .= "\nMighty Gumball, Inc.";
        $out .= "\nJava-enabled Standing Gumball Model #2004";
        $out .= "\nInventory: {$this->count} gumball";
        if ($this->count != 1) {
            $out .= "s";
        }
        $out .= "\n";
        $out .= "Machine is {$this->state}\n";

        return $out;
    }
}
