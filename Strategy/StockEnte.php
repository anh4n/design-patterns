<?php

class StockEnte extends Ente
{
    public function __construct()
    {
        $this->flugVerhalten = new FliegenMitFluegeln();
        $this->quakVerhalten = new Quaken();
    }

    public function anzeigen()
    {
        echo "Ich bin eine echte StockEnte\n";
    }
}
