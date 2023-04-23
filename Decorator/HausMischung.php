<?php

/**
 * Class HausMischung
 */
class HausMischung extends Getraenk
{
    public function __construct()
    {
        $this->beschreibung = 'Hausmischung';
    }

    /**
     * @return float
     */
    public function preis()
    {
        return .89;
    }
}
