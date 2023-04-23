<?php

namespace Entwurfsmuster\Mixed\Factory;

use Entwurfsmuster\Mixed\Decorator\QuakZähler;
use Entwurfsmuster\Mixed\GummiEnte;
use Entwurfsmuster\Mixed\LockPfeife;
use Entwurfsmuster\Mixed\MoorEnte;
use Entwurfsmuster\Mixed\Quakfähig;
use Entwurfsmuster\Mixed\StockEnte;

/**
 * Class ZählendeEntenFabrik
 * @package Entwurfsmuster\Mixed\Factory
 */
class ZählendeEntenFabrik extends AbstrakteEntenFabrik
{
    /**
     * @return Quakfähig
     */
    public function erzeugeStockEnte()
    {
        return new QuakZähler(new StockEnte());
    }

    /**
     * @return Quakfähig
     */
    public function erzeugeMoorEnte()
    {
        return new QuakZähler(new MoorEnte());
    }

    /**
     * @return Quakfähig
     */
    public function erzeugeLockPfeife()
    {
        return new QuakZähler(new LockPfeife());
    }

    /**
     * @return Quakfähig
     */
    public function erzeugeGummiEnte()
    {
        return new QuakZähler(new GummiEnte());
    }
}
