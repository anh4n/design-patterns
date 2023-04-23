<?php


class ModellEnte extends Ente
{

    public function __construct()
    {
        $this->flugVerhalten = new FliegtGarNicht();
        $this->quakVerhalten = new Quaken();
    }

    public function anzeigen()
    {
        echo "Ich bin eine Modellente\n";
    }
}
