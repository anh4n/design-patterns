<?php

namespace Entwurfsmuster\Mixed\Observer;

/**
 * Interface Beobachter
 * @package Entwurfsmuster\Mixed\Observer
 */
interface Beobachter
{
    public function aktualisieren(QuakBeobachtungsSubjekt $ente);
}
