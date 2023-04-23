<?php


abstract class ZutatDekorierer extends Getraenk
{
    protected $getraenk;

    function __construct(Getraenk $getraenk)
    {
        $this->getraenk = $getraenk;
    }
}
