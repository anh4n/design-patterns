<?php

namespace Entwurfsmuster\Mixed\Observer;

interface QuakBeobachtungsSubjekt
{
    public function regestriereBeobachter(Beobachter $beobachter);
    public function benachrichtigeBeobachter();
}
