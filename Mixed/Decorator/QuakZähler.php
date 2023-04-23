<?php

namespace Entwurfsmuster\Mixed\Decorator;

use Entwurfsmuster\Mixed\Observer\Beobachter;
use Entwurfsmuster\Mixed\Quakfähig;

/**
 * Class QuakZähler
 * @package Entwurfsmuster\Mixed\Decorator
 */
class QuakZähler implements Quakfähig
{
    /**
     * @var Quakfähig
     */
    protected $ente;
    /**
     * @var int
     */
    protected static $anzahlDerQuaks;

    /**
     * @param Quakfähig $ente
     */
    public function __construct(Quakfähig $ente)
    {
        $this->ente = $ente;
    }

    public function quaken()
    {
        $this->ente->quaken();
        self::$anzahlDerQuaks++;
    }

    /**
     * @return int
     */
    public static function getQuaks()
    {
        return self::$anzahlDerQuaks;
    }

    public function regestriereBeobachter(Beobachter $beobachter)
    {
        $this->ente->regestriereBeobachter($beobachter);
    }

    public function benachrichtigeBeobachter()
    {
        $this->ente->benachrichtigeBeobachter();
    }
}
