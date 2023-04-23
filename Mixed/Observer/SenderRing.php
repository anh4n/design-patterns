<?php

namespace Entwurfsmuster\Mixed\Observer;

use Entwurfsmuster\Mixed\ArrayList;

/**
 * Class SenderRing
 * @package Entwurfsmuster\Mixed\Observer
 */
class SenderRing implements QuakBeobachtungsSubjekt
{
    /**
     * @var ArrayList
     */
    protected $beobachtende;
    /**
     * @var QuakBeobachtungsSubjekt
     */
    protected $ente;

    public function __construct(QuakBeobachtungsSubjekt $ente)
    {
        $this->beobachtende = new ArrayList();
        $this->ente = $ente;
    }

    /**
     * @param Beobachter $beobachter
     */
    public function regestriereBeobachter(Beobachter $beobachter)
    {
        $this->beobachtende->add($beobachter);
    }

    public function benachrichtigeBeobachter()
    {
        $iteraor = $this->beobachtende->iterator();
        while ($iteraor->hasNext()) {
            /** @var Beobachter $beobachter */
            $beobachter = $iteraor->next();
            $beobachter->aktualisieren($this->ente);
        }
    }
}
