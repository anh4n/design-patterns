<?php

/**
 * Class WetterDaten
 */
class WetterDaten implements Observable
{
    /**
     * @var array
     */
    private $observers;
    /**
     * @var float
     */
    private $temperatur;
    /**
     * @var float
     */
    private $feuchtigkeit;
    /**
     * @var float
     */
    private $luftdruck;

    public function __construct()
    {
        $this->observers = array();
    }

    /**
     * @param Observer $o
     */
    public function addObserver(Observer $o)
    {
        $this->observers[] = $o;
    }

    /**
     * @param Observer $o
     */
    public function removeObserver(Observer $o)
    {
        if (in_array($o, $this->observers)) {

            $i = array_search($o, $this->observers);

            unset($this->observers[$i]);
        }
    }

    public function notifyObservers()
    {
        /** @var Observer $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this->temperatur, $this->feuchtigkeit, $this->luftdruck);
        }
    }

    public function messwerteGeändert()
    {
        $this->notifyObservers();
    }

    /**
     * @param float $temp
     * @param float $feucht
     * @param float $druck
     */
    public function setMesswerte($temp, $feucht, $druck)
    {
        $this->temperatur = $temp;
        $this->feuchtigkeit = $feucht;
        $this->luftdruck = $druck;
        $this->messwerteGeändert();
    }
}
