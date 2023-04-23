<?php

/**
 * Class Schoko
 */
class Schoko extends ZutatDekorierer
{
    /**
     * @return string
     */
    public function getBeschreibung()
    {
        return $this->getraenk->getBeschreibung() . ', Schoko';
    }

    /**
     * @return float
     */
    public function preis()
    {
        return .20 + $this->getraenk->preis();
    }
}
