<?php

namespace Entwurfsmuster\Mixed;

use Entwurfsmuster\Mixed\Observer\Beobachter;
use Entwurfsmuster\Mixed\Observer\SenderRing;

class GummiEnte implements Quakfähig
{
    protected $senderRing;

    public function __construct()
    {
        $this->senderRing = new SenderRing($this);
    }

    public function quaken()
    {
        echo "Quietsch\n";
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
        return "Gummiente";
    }
}
