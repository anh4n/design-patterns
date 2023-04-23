<?php

namespace Entwurfsmuster\Mixed;

class Gans
{
    public function schnattern()
    {
        echo "Schnatter\n";
    }

    public function __toString()
    {
        return "Gans";
    }
}
