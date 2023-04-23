<?php

namespace Entwurfsmuster\Mixed\Factory;

use Entwurfsmuster\Mixed\GummiEnte;
use Entwurfsmuster\Mixed\LockPfeife;
use Entwurfsmuster\Mixed\MoorEnte;
use Entwurfsmuster\Mixed\Quakfähig;
use Entwurfsmuster\Mixed\StockEnte;

/**
 * Class EntenFabrik
 * @package Entwurfsmuster\Mixed\Factory
 */
class EntenFabrik extends AbstrakteEntenFabrik
{
    /**
     * @return Quakfähig
     */
    public function erzeugeStockEnte()
    {
        return new StockEnte();
    }

    /**
     * @return Quakfähig
     */
    public function erzeugeMoorEnte()
    {
        return new MoorEnte();
    }

    /**
     * @return Quakfähig
     */
    public function erzeugeLockPfeife()
    {
        return new LockPfeife();
    }

    /**
     * @return Quakfähig
     */
    public function erzeugeGummiEnte()
    {
        return new GummiEnte();
    }
}
