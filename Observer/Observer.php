<?php

/**
 * Interface Observer
 */
interface Observer
{
    /**
     * @param float $temp
     * @param float $feucht
     * @param float $druck
     */
    public function update($temp, $feucht, $druck);
}
