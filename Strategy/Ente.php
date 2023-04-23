<?php

abstract class Ente
{
    /**
     * @var FlugVerhalten
     */

    protected $flugVerhalten;
    /**
     * @var QuakVerhalten
     */

    protected $quakVerhalten;

    /**
     * @param FlugVerhalten $flugVerhalten
     */
    public function setFlugverhalten(FlugVerhalten $flugVerhalten)
    {
        $this->flugVerhalten = $flugVerhalten;
    }

    /**
     * @param QuakVerhalten $quakVerhalten
     */
    public function setQuakVerhalten(QuakVerhalten $quakVerhalten)
    {
        $this->quakVerhalten = $quakVerhalten;
    }

    public function tuFliegen()
    {
        $this->flugVerhalten->fliegen();
    }

    public function tuQuaken()
    {
        $this->quakVerhalten->quak();
    }

    public function schwimmen()
    {
        echo "Alle Enten schwimmen, auch Holzenten!\n";
    }

    abstract public function anzeigen();
}
