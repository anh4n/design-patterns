<?php

namespace Entwurfsmuster\State;

/**
 * Interface State
 * @package State
 */
interface State
{
    public function insertQuarter();

    public function ejectQuarter();

    public function turnCrank();

    public function dispense();

    public function refill();
}
