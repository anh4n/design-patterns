<?php

namespace Entwurfsmuster\Mixed;

use Entwurfsmuster\Mixed\Observer\Beobachter;
use Entwurfsmuster\Mixed\Observer\SenderRing;

class StockEnte implements Quakfähig
{
    protected $senderRing;

    public function __construct()
    {
        $this->senderRing = new SenderRing($this);
    }

    public function quaken()
    {
        echo "Quak\n";
        $this->benachrichtigeBeobachter();
    }

    public function regestriereBeobachter(Beobachter $beobachter)
    {
        $this->senderRing->regestriereBeobachter($beobachter);
    }

    public function benachrichtigeBeobachter()
    {
        $this->senderRing->benachrichtigeBeobachter();
    }

    public function __toString()
    {
        return "Stockente";
    }
}
