<?php

/**
 * Class Soja
 */
class Soja extends ZutatDekorierer
{
    /**
     * @return string
     */
    public function getBeschreibung()
    {
        return $this->getraenk->getBeschreibung() . ', Soja';
    }

    /**
     * @return float
     */
    public function preis()
    {
        return .15 + $this->getraenk->preis();
    }
}
