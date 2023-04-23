<?php

namespace Entwurfsmuster\Mixed\Factory;

use Entwurfsmuster\Mixed\Quakfähig;

/**
 * Class AbstrakteEntenFabrik
 * @package Entwurfsmuster\Mixed\Factory
 */
abstract class AbstrakteEntenFabrik
{
    /**
     * @return Quakfähig
     */
    public abstract function erzeugeStockEnte();
    /**
     * @return Quakfähig
     */
    public abstract function erzeugeMoorEnte();
    /**
     * @return Quakfähig
     */
    public abstract function erzeugeLockPfeife();
    /**
     * @return Quakfähig
     */
    public abstract function erzeugeGummiEnte();
}
