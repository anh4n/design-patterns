<?php

interface PostenAusgabe
{
    public function ausgeben();
}

class NormaleAusgabe implements PostenAusgabe
{
    public function ausgeben()
    {
        // Posten normal ausgeben
    }
}

class XAusgabe implements PostenAusgabe
{
    public function ausgeben()
    {
        // Posten mit X ausgeben
    }
}

class RechnungsPosten
{
    /**
     * @var PostenAusgabe
     */
    private $postenAusgabe;

    /**
     * @var float
     */
    public $value;

    public function __construct()
    {
        $this->postenAusgabe = new NormaleAusgabe();
    }

    /**
     * @param PostenAusgabe $postenAusgabe
     */
    public function setPostenAusgabe(PostenAusgabe $postenAusgabe)
    {
        $this->postenAusgabe = $postenAusgabe;
    }

    public function machAusgabe()
    {
        $this->postenAusgabe->ausgeben();
    }
}

class Rechnung
{
    /**
     * @var RechnungsPosten[]
     */
    private $posten;

    public function postenAusgeben()
    {
        foreach ($this->posten as $posten) {
            if ($posten->value > 100) {
                $posten->setPostenAusgabe(new XAusgabe());
            }

            $posten->machAusgabe();
        }
    }
}

$rechnung = new Rechnung();
$rechnung->postenAusgeben();
