<?php

class FliegtGarNicht implements FlugVerhalten
{
    public function fliegen()
    {
        echo "Ich kann nicht fliegen.\n";
    }
}
