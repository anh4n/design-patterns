<?php

/**
 * Class DunkleRoestung
 */
class DunkleRoestung extends Getraenk
{
    public function __construct()
    {
        $this->beschreibung = 'Dunkle Röstung';
    }

    /**
     * @return float
     */
    public function preis()
    {
        return .99;
    }
}
