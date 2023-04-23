<?php

/**
 * Class Getraenk
 */
abstract class Getraenk
{
    protected $beschreibung = 'Unknown Beverage';

    /**
     * @return string
     */
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

    /**
     * @return float
     */
    public abstract function preis();
}
