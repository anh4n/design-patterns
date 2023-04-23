<?php

namespace Entwurfsmuster\Mixed;

use Entwurfsmuster\Mixed\Adapter\GansAdapter;
use Entwurfsmuster\Mixed\Composite\Schar;
use Entwurfsmuster\Mixed\Decorator\QuakZähler;
use Entwurfsmuster\Mixed\Factory\AbstrakteEntenFabrik;
use Entwurfsmuster\Mixed\Observer\Quakologe;

class EntenSimulator
{
    public function simulieren(AbstrakteEntenFabrik $entenFabrik)
    {
        $stockEnte = $entenFabrik->erzeugeStockEnte();
        $moorEnte = $entenFabrik->erzeugeMoorEnte();
        $lockPfeife = $entenFabrik->erzeugeLockPfeife();
        $gummiEnte = $entenFabrik->erzeugeGummiEnte();
        $gansEnte = new GansAdapter(new Gans());

        echo "\nEntensimulator mit Composite in Scharen\n";

        $entenSchar = new Schar();

        $entenSchar->hinzufügen($moorEnte);
        $entenSchar->hinzufügen($lockPfeife);
        $entenSchar->hinzufügen($gummiEnte);
        $entenSchar->hinzufügen($gansEnte);

        $stockEntenSchar = new Schar();

        $stockEnte1 = $entenFabrik->erzeugeStockEnte();
        $stockEnte2 = $entenFabrik->erzeugeStockEnte();
        $stockEnte3 = $entenFabrik->erzeugeStockEnte();
        $stockEnte4 = $entenFabrik->erzeugeStockEnte();

        $stockEntenSchar->hinzufügen($stockEnte1);
        $stockEntenSchar->hinzufügen($stockEnte2);
        $stockEntenSchar->hinzufügen($stockEnte3);
        $stockEntenSchar->hinzufügen($stockEnte4);

        $entenSchar->hinzufügen($stockEntenSchar);

        echo "\nEntensimulator: mit Observer\n";
        $quakologe = new Quakologe();
        $entenSchar->regestriereBeobachter($quakologe);
        $this->simuliereEnte($entenSchar);

        echo "Die Enten haben " . QuakZähler::getQuaks() . "-mal gequakt.\n";
    }

    public function simuliereEnte(Quakfähig $ente)
    {
        $ente->quaken();
    }
}
