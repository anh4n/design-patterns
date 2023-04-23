<?php

namespace Entwurfsmuster\Mixed\Adapter;

use Entwurfsmuster\Mixed\Gans;
use Entwurfsmuster\Mixed\Observer\Beobachter;
use Entwurfsmuster\Mixed\Quakfähig;
use Entwurfsmuster\Mixed\Observer\SenderRing;

class GansAdapter implements Quakfähig
{
    /**
     * @var \Entwurfsmuster\Mixed\Gans
     */
    protected $gans;

    public function __construct(Gans $gans)
    {
        $this->gans = $gans;
        $this->senderRing = new SenderRing($this);
    }

    public function quaken()
    {
        $this->gans->schnattern();
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
        return "sich als Ente ausgebende Gans";
    }


}
