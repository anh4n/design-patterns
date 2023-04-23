<?php

/**
 * Class Milchschaum
 */
class Milchschaum extends ZutatDekorierer
{
    /**
     * @return string
     */
    public function getBeschreibung()
    {
        return $this->getraenk->getBeschreibung() . ', Milchschaum';
    }

    /**
     * @return float
     */
    public function preis()
    {
        return .10 + $this->getraenk->preis();
    }
}
