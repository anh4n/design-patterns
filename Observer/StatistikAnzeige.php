<?php

/**
 * Class StatistikAnzeige
 */
class StatistikAnzeige implements Observer, AnzeigeElement
{
    /**
     * @var float
     */
    private $maxTemp = 0.0;
    /**
     * @var int
     */
    private $minTemp = 200;
    /**
     * @var float
     */
    private $tempSum = 0.0;
    /**
     * @var int
     */
    private $anzMesswerte;
    /**
     * @var WetterDaten
     */
    private $wetterDaten;

    /**
     * @param Observable $wetterDaten
     */
    public function __construct(Observable $wetterDaten)
    {
        $this->wetterDaten = $wetterDaten;
        $this->wetterDaten->addObserver($this);
    }

    public function show()
    {
        echo "Mit/Max/Min Temperatur = " . number_format($this->tempSum / $this->anzMesswerte, 1) . "/$this->maxTemp/$this->minTemp\n";
    }

    /**
     * @param float $temp
     * @param float $feucht
     * @param float $druck
     */
    public function update($temp, $feucht, $druck)
    {
        $this->tempSum += $temp;
        $this->anzMesswerte++;

        if ($temp > $this->maxTemp) {
            $this->maxTemp = $temp;
        }

        if ($temp < $this->minTemp) {
            $this->minTemp = $temp;
        }

        $this->show();
    }
}
