<?php

namespace Entwurfsmuster\Mixed\Composite;

use Entwurfsmuster\Mixed\ArrayList;
use Entwurfsmuster\Mixed\Observer\Beobachter;
use Entwurfsmuster\Mixed\Quakfähig;

/**
 * Class Schar
 * @package Entwurfsmuster\Mixed\Composite
 */
class Schar implements Quakfähig
{
    /**
     * @var ArrayList
     */
    protected $quakende;

    public function __construct()
    {
        $this->quakende = new ArrayList();
    }

    /**
     * @param Quakfähig $quaker
     */
    public function hinzufügen(Quakfähig $quaker)
    {
        $this->quakende->add($quaker);
    }


    public function quaken()
    {
        $iterator = $this->quakende->iterator();
        while ($iterator->hasNext()) {
            /** @var Quakfähig $quaker */
            $quaker = $iterator->next();
            $quaker->quaken();
        }
    }

    public function regestriereBeobachter(Beobachter $beobachter)
    {
        $iterator = $this->quakende->iterator();
        while ($iterator->hasNext()) {
            /** @var Quakfähig $quaker */
            $quaker = $iterator->next();
            $quaker->regestriereBeobachter($beobachter);
        }
    }

    public function benachrichtigeBeobachter()
    {
    }
}
