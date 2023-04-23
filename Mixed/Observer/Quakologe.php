<?php

namespace Entwurfsmuster\Mixed\Observer;

/**
 * Class Quakologe
 * @package Entwurfsmuster\Mixed\Observer
 */
class Quakologe implements Beobachter
{
    public function aktualisieren(QuakBeobachtungsSubjekt $ente)
    {
        echo "Quakologe: $ente hat gerade gequakt.\n";
    }
}
