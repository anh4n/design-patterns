<?php

/**
 * Class Espresso
 */
class Espresso extends Getraenk
{
    public function __construct()
    {
        $this->beschreibung = 'Espresso';
    }

    /**
     * @return float
     */
    public function preis()
    {
        return 1.99;
    }
}
