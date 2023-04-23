<?php

/**
 * Interface Observable
 */
interface Observable
{
    /**
     * @param Observer $o
     */
    public function addObserver(Observer $o);

    /**
     * @param Observer $o
     */
    public function removeObserver(Observer $o);

    public function notifyObservers();
}
