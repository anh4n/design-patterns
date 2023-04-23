<?php

/**
 * Class AktuelleBedingungenAnzeige
 */
class AktuelleBedingungenAnzeige implements Observer, AnzeigeElement
{
    /**
     * @var Observable
     */
    private $wetterDaten;
    /**
     * @var float
     */
    private $temperatur;
    /**
     * @var float
     */
    private $feuchtigkeit;

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
        echo "Aktuelle Wetterbedingungen: $this->temperatur Grad C und $this->feuchtigkeit % Luftfeuchtigkeit\n";
    }

    /**
     * @param float $temp
     * @param float $feucht
     * @param float $druck
     */
    public function update($temp, $feucht, $druck)
    {
        $this->temperatur = $temp;
        $this->feuchtigkeit = $feucht;
        $this->show();
    }
}
