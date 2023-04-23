<?php

namespace Entwurfsmuster\Mixed;

use Entwurfsmuster\Mixed\Observer\QuakBeobachtungsSubjekt;

interface Quakfähig extends QuakBeobachtungsSubjekt
{
    public function quaken();
}
